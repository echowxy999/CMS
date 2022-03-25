<?php


namespace Dbset;

use Laminas\Db\Sql\Select;
use Laminas\Db\TableGateway\TableGatewayInterface;
use RuntimeException;

abstract class AbstractionTable
{
    protected $tableGateway;
    public $tableName = '';
    public $primaryKey = 'id';

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    private function genWhereSyntax($fieldName, $fieldValue, $operator = '=')
    {
        $operator = strtolower($operator);
        // if $fieldValue is null
        if (is_null($fieldValue)) {
            return "$fieldName is null";
        }

        // if $fieldValue is boolean
        if (true === $fieldValue) {
            $fieldValue = 1;
        }

        if (false === $fieldValue) {
            $fieldValue = 0;
        }

        // if $fieldValue is array
        if (is_array($fieldValue) && 'in' == $operator) {
            $fieldValueString = '';
            foreach ($fieldValue as $value) {
                if (is_string($value)) {
                    $fieldValueString .= "'$value',";
                } elseif (is_numeric($value)) {
                    $fieldValueString .= "$value,";
                } else {
                    throw new RuntimeException('Invalid value ' . var_export($fieldValue,
                            true) . ' of Parameter ' . $fieldName);
                }
            }
            $fieldValueString = substr($fieldValueString, 0, -1);
            return "$fieldName in ($fieldValueString)";
        }

        if (!is_string($fieldValue) && !is_numeric($fieldValue)) {
            throw new RuntimeException('Invalid value ' . var_export($fieldValue,
                    true) . ' of Parameter ' . $fieldName);
        }
        if ('notlike' == $operator) {
            return "$fieldName NOT LIKE '$fieldValue'";
        }
        if ('like' == $operator) {
            return "$fieldName LIKE '$fieldValue'";
        }
        if ('like%' == $operator) {
            return "$fieldName LIKE '%$fieldValue%'";
        }

        if (is_string($fieldValue)) {
            return "$fieldName $operator '$fieldValue'";
        }

        return "$fieldName $operator $fieldValue";
    }

    public function getByPrimaryKey(int $id)
    {
        $id = (int)$id;
        $rowset = $this->tableGateway->select([$this->primaryKey => $id]);
        $row = $rowset->current();
        return $row;
    }

    public function fetchOne(string $whereStr, string $orderBy = 'id DESC')
    {
        $rowset = $this->tableGateway->select($whereStr);
        $row = $rowset->current();
        return $row;
    }

    /**
     * @param string $whereStr
     * @param string $orderBy
     * @param int|null $limit
     * @return mixed
     */
    public function listAll(string $whereStr, string $orderBy = 'id DESC', int $limit = null)
    {
        $select = new Select();
        $select->where($whereStr)->order($orderBy);
        if (!empty($limit) && is_int($limit)) {
            $select->limit($limit);
        }
        $select->from($this->tableName);
        return $this->tableGateway->selectWith($select);
    }

    public function fetchAll(string $orderBy = 'id DESC', int $limit = null)
    {
        $select = new Select();
        $select->order($orderBy);
        if (!empty($limit) && is_int($limit)) {
            $select->limit($limit);
        }
        $select->from($this->tableName);

        return $this->tableGateway->selectWith($select);
    }

    public function fetchOneByField(string $fieldName, $fieldValue, string $operator = '=')
    {
        $rowset = $this->tableGateway->select([$this->genWhereSyntax($fieldName, $fieldValue, $operator)]);
        $row = $rowset->current();
        return $row;
    }

    public function fetchAllByField(
        string $fieldName,
        $fieldValue,
        string $operator = '=',
        string $orderBy = 'id DESC',
        int $limit = null
    ) {
        $select = new Select();
        $select->order($orderBy);
        if (!empty($limit) && is_int($limit)) {
            $select->limit($limit);
        }
        $select->from($this->tableName);
        $select->where([$this->genWhereSyntax($fieldName, $fieldValue, $operator)]);
        return $this->tableGateway->selectWith($select);
    }

    public function fetchOneByFields(array $fields)
    {
        $where = [];
        foreach ($fields as $field) {
            $operator = '=';
            if (isset($field['fieldName'])) {
                $fieldName = $field['fieldName'];
            } else {
                $fieldName = $field[0];
            }
            if (array_key_exists('fieldValue', $field)) {
                $fieldValue = $field['fieldValue'];
            } else {
                $fieldValue = $field[1];
            }
            if (isset($field['operator'])) {
                $operator = $field['operator'];
            } elseif (isset($field[2])) {
                $operator = $field[2];
            }

            $where[] = $this->genWhereSyntax($fieldName, $fieldValue, $operator);
        }
        $rowset = $this->tableGateway->select($where);
        $row = $rowset->current();
        return $row;
    }

    public function fetchAllByFields(
        array $fields,
        string $orderBy = 'id DESC',
        int $limit = null
    ) {
        $where = [];
        foreach ($fields as $field) {
            $operator = '=';
            if (isset($field['fieldName'])) {
                $fieldName = $field['fieldName'];
            } else {
                $fieldName = $field[0];
            }
            if (array_key_exists('fieldValue', $field)) {
                $fieldValue = $field['fieldValue'];
            } else {
                $fieldValue = $field[1];
            }
            if (isset($field['operator'])) {
                $operator = $field['operator'];
            } elseif (isset($field[2])) {
                $operator = $field[2];
            }

            $where[] = $this->genWhereSyntax($fieldName, $fieldValue, $operator);
        }

        $select = new Select();
        $select->order($orderBy);
        if (!empty($limit) && is_int($limit)) {
            $select->limit($limit);
        }
        $select->from($this->tableName);
        $select->where($where);
        return $this->tableGateway->selectWith($select);
    }

    public function addOrUpdate($model)
    {
        if (empty($model)) {
            throw new RuntimeException(get_class($model) . ' cannot be empty!');
        }

        $id = $model->getId();
        if (empty($id) || !$this->getByPrimaryKey($id)) {
            $this->tableGateway->insert($model->toArray());
            return $this->tableGateway->getLastInsertValue();
        }

        $this->tableGateway->update($model->toArray(), ['id' => $id]);
        return $id;
    }

    public function add($model)
    {
        if (!empty($model->getId())) {
            throw new RuntimeException('Insertion of ' . get_class($model) . ' cannot include id value: ' . $model->getId() . '!');
        }

        $arr = $model->toArray();
        // var_dump($arr);
        /**
         * $array = [
         * 'id' => 1,
         * 'business_id' => 1,//
         * 'courier_id' =>  1,//$this->getCourierId(),
         * 'integration_id' =>  1,//$this->getIntegrationId(),
         * 'integration_order_id' =>  "1",//$this->getIntegrationOrderId(),
         * 'transaction_id' =>  "1",//$this->getTransactionId(),
         * 'courier_shipment_id' =>  "1",//$this->getCourierShipmentId(),
         * 'courier_consignment_id' =>  "1",//$this->getCourierConsignmentId(),
         * 'courier_label_raw' =>  "1",//$this->getCourierLabelRaw(),
         * 'courier_label_link' =>  "1",//$this->getCourierLabelLink(),
         * 'stage' =>  "1",//$this->getStage(),
         * 'status' =>  "1",//$this->getStatus(),
         * 'customer_id' => 1,// $this->getCustomerId(),
         * 'name' => "1",// $this->getName(),
         * 'company' =>  "1",//$this->getCompany(),
         * 'source' =>  "1",//$this->getSource(),
         *
         * 'address_line_1' =>  "1",//$this->getAddressLine1(),
         * 'address_line_2' =>  "1",//$this->getAddressLine2(),
         * 'address_line_3' =>  "1",//$this->getAddressLine3(),
         * 'address_suburb' =>  "1",//$this->getAddressSuburb(),
         * 'address_state' =>  "1",//$this->getAddressState(),
         * 'address_postcode' =>  "1",//$this->getAddressPostcode(),
         * 'address_country' =>  "1",//$this->getAddressCountry(),
         * 'reference_1' =>  "1",//$this->getReference1(),
         * 'reference_2' =>  "1",//$this->getReference2(),
         * 'email' =>  "1",//$this->getEmail(),
         * 'mobile' =>  "1",//$this->getMobile(),
         * 'phone' =>  "1",//$this->getPhone(),
         * 'special_instructions_1' =>  "1",//$this->getSpecialInstructions1(),
         * 'special_instructions_2' =>  "1",//$this->getSpecialInstructions2(),
         * 'pickup_date' =>  "2021-01-01",//$this->getPickupDate(),
         * 'authority_to_leave' =>  1,//$this->getAuthorityToLeave(),
         * 'calculated_price' =>  1.00,//$this->getCalculatedPrice(),
         * 'calculated_price_ex_gst' =>  1.00,//$this->getCalculatedPriceExGst(),
         * 'calculated_gst' =>  1.00,//$this->getCalculatedGst(),
         * 'fuel_surcharge' =>  1.00,//$this->getFuelSurcharge(),
         * 'total_surcharge' =>  1.00,//$this->getTotalSurcharge(),
         *
         * 'integration_shipping_method' =>  "1"//$this->getIntegrationShippingMethod(),
         *
         * ];**/
        $this->tableGateway->insert($arr);

        return $this->tableGateway->getLastInsertValue();
    }

    public function update($model)
    {
        $id = $model->getId();

        if (!$this->getByPrimaryKey($id)) {
            throw new RuntimeException(get_class($model) . ' with id: ' . $id . ' not found');
        }

        $this->tableGateway->update($model->toArray(), ['id' => $id]);
        return $id;
    }

    public function deleteByPrimaryKey(int $id)
    {
        $this->tableGateway->delete([$this->primaryKey => (int)$id]);
    }

    public function toObjArray($resutSet)
    {
        $arrRes = array();
        foreach ($resutSet as $row) {
            $arrRes[] = $row;
        }
        return $arrRes;
    }

}