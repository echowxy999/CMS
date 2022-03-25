<?php
namespace Dbset\Cust\Abstraction;

use RuntimeException;
use Laminas\Db\TableGateway\TableGatewayInterface;
use Dbset\AbstractionTable;


abstract class CustcustomerattributeTable extends AbstractionTable
{

    const _ID = 'id';

    const _NAME_ATTRIBUTE = 'name_attribute';

    const _KEY_ATTRIBUTE = 'key_attribute';

    const _ORDER_ATTRIBUTE = 'order_attribute';

    const _DISABLED = 'disabled';

    public $tableName = 'cust_customer_attribute';

    /**
     * Database Operation: getByPrimaryKey
     *
     * 2022-02-17 11:16:25
     *
     *
     * @param int $id
     * @return \Model\\Custcustomerattribute
     */
    public function getByPrimaryKey(int $id)
    {
        return parent::getByPrimaryKey($id);
    }

    /**
     * Database Operation: fetchAll
     *
     * 2022-02-17 11:16:25
     *
     *
     * @param string $orderBy
     * @param int $int
     * @return \Model\\Custcustomerattribute[]
     */
    public function fetchAll(string $orderBy = 'id DESC', int $int = null)
    {
        return parent::fetchAll($orderBy, $int);
    }

    /**
     * Database Operation: fetchOneByField
     *
     * 2022-02-17 11:16:25
     *
     *
     * @param string $fieldName
     * @param int|string|boolean|array|null $fieldValue
     * @param string $operator
     * @return \Model\\Custcustomerattribute
     */
    public function fetchOneByField(string $fieldName, $fieldValue, string $operator = '=')
    {
        return parent::fetchOneByField($fieldName, $fieldValue, $operator);
    }

    /**
     * Database Operation: fetchAllByField
     *
     * 2022-02-17 11:16:25
     *
     *
     * @param string $fieldName
     * @param int|string|boolean|array|null $fieldValue
     * @param string $operator
     * @param string $orderBy
     * @param int $int
     * @return \Model\\Custcustomerattribute[]
     */
    public function fetchAllByField(string $fieldName, $fieldValue, string $operator = '=', string $orderBy = 'id DESC', int $int = null)
    {
        return parent::fetchAllByField($fieldName, $fieldValue, $operator, $orderBy, $int);
    }

    /**
     * Database Operation: fetchOneByFields
     *
     * 2022-02-17 11:16:25
     * Example of fields: [
     *
     *                 ['id','3','>'],
     *
     *                 ['name','b','like'],
     *
     *                 ['address',null],
     *
     *                 ['phone','0431245342'],
     *
     *                 ['role',['admin','member'],'in']
     *
     *                 ]
     *
     * @param array $fields
     * @return \Model\\Custcustomerattribute
     */
    public function fetchOneByFields(array $fields)
    {
        return parent::fetchOneByFields($fields);
    }

    /**
     * Database Operation: fetchAllByFields
     *
     * 2022-02-17 11:16:25
     * Example of fields: [
     *
     *                 ['id','3','>'],
     *
     *                 ['name','b','like'],
     *
     *                 ['address',null],
     *
     *                 ['phone','0431245342'],
     *
     *                 ['role',['admin','member'],'in']
     *
     *                 ]
     *
     * @param array $fields
     * @param string $orderBy
     * @param int $int
     * @return \Model\\Custcustomerattribute[]
     */
    public function fetchAllByFields(array $fields, string $orderBy = 'id DESC', int $int = null)
    {
        return parent::fetchAllByFields($fields, $orderBy, $int);
    }

    /**
     * Database Operation: addOrUpdate
     *
     * 2022-02-17 11:16:25
     *
     *
     * @param \Model\\Custcustomerattribute $model
     * @return int
     */
    public function addOrUpdate($model)
    {
        return parent::addOrUpdate($model);
    }

    /**
     * Database Operation: add
     *
     * 2022-02-17 11:16:25
     *
     *
     * @param \Model\\Custcustomerattribute $model
     * @return int
     */
    public function add($model)
    {
        return parent::add($model);
    }

    /**
     * Database Operation: update
     *
     * 2022-02-17 11:16:25
     *
     *
     * @param \Model\\Custcustomerattribute $model
     * @return int
     */
    public function update($model)
    {
        return parent::update($model);
    }

    /**
     * Database Operation: deleteByPrimaryKey
     *
     * 2022-02-17 11:16:25
     *
     *
     * @param int $id
     * @return boolean
     */
    public function deleteByPrimaryKey(int $id)
    {
        return parent::deleteByPrimaryKey($id);
    }


}