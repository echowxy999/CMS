<?php
namespace Dbset\Cust\Abstraction;

use RuntimeException;
use Laminas\Db\TableGateway\TableGatewayInterface;
use Dbset\AbstractionTable;


abstract class CustcustomerTable extends AbstractionTable
{

    const _ID = 'id';

    const _EMAIL_CUST = 'email_cust';

    const _COMPANY_NAME_CUST = 'company_name_cust';

    const _CONTACT_NAME_CUST = 'contact_name_cust';

    const _IS_ACTIVE = 'is_active';

    public $tableName = 'cust_customer';

    /**
     * Database Operation: getByPrimaryKey
     *
     * 2022-02-10 11:10:46
     *
     *
     * @param int $id
     * @return \Model\\Custcustomer
     */
    public function getByPrimaryKey(int $id)
    {
        return parent::getByPrimaryKey($id);
    }

    /**
     * Database Operation: fetchAll
     *
     * 2022-02-10 11:10:46
     *
     *
     * @param string $orderBy
     * @param int $int
     * @return \Model\\Custcustomer[]
     */
    public function fetchAll(string $orderBy = 'id DESC', int $int = null)
    {
        return parent::fetchAll($orderBy, $int);
    }

    /**
     * Database Operation: fetchOneByField
     *
     * 2022-02-10 11:10:46
     *
     *
     * @param string $fieldName
     * @param int|string|boolean|array|null $fieldValue
     * @param string $operator
     * @return \Model\\Custcustomer
     */
    public function fetchOneByField(string $fieldName, $fieldValue, string $operator = '=')
    {
        return parent::fetchOneByField($fieldName, $fieldValue, $operator);
    }

    /**
     * Database Operation: fetchAllByField
     *
     * 2022-02-10 11:10:46
     *
     *
     * @param string $fieldName
     * @param int|string|boolean|array|null $fieldValue
     * @param string $operator
     * @param string $orderBy
     * @param int $int
     * @return \Model\\Custcustomer[]
     */
    public function fetchAllByField(string $fieldName, $fieldValue, string $operator = '=', string $orderBy = 'id DESC', int $int = null)
    {
        return parent::fetchAllByField($fieldName, $fieldValue, $operator, $orderBy, $int);
    }

    /**
     * Database Operation: fetchOneByFields
     *
     * 2022-02-10 11:10:46
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
     * @return \Model\\Custcustomer
     */
    public function fetchOneByFields(array $fields)
    {
        return parent::fetchOneByFields($fields);
    }

    /**
     * Database Operation: fetchAllByFields
     *
     * 2022-02-10 11:10:46
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
     * @return \Model\\Custcustomer[]
     */
    public function fetchAllByFields(array $fields, string $orderBy = 'id DESC', int $int = null)
    {
        return parent::fetchAllByFields($fields, $orderBy, $int);
    }

    /**
     * Database Operation: addOrUpdate
     *
     * 2022-02-10 11:10:46
     *
     *
     * @param \Model\\Custcustomer $model
     * @return int
     */
    public function addOrUpdate($model)
    {
        return parent::addOrUpdate($model);
    }

    /**
     * Database Operation: add
     *
     * 2022-02-10 11:10:46
     *
     *
     * @param \Model\\Custcustomer $model
     * @return int
     */
    public function add($model)
    {
        return parent::add($model);
    }

    /**
     * Database Operation: update
     *
     * 2022-02-10 11:10:46
     *
     *
     * @param \Model\\Custcustomer $model
     * @return int
     */
    public function update($model)
    {
        return parent::update($model);
    }

    /**
     * Database Operation: deleteByPrimaryKey
     *
     * 2022-02-10 11:10:46
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