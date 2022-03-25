<?php
namespace Dbset\Staff\Abstraction;

use RuntimeException;
use Laminas\Db\TableGateway\TableGatewayInterface;
use Dbset\AbstractionTable;


abstract class StafflistTable extends AbstractionTable
{

    const _ID = 'id';

    const _ID_CUST = 'id_cust';

    const _BARCODE_STAFF = 'barcode_staff';

    const _EMAIL_STAFF = 'email_staff';

    const _NAME_STAFF = 'name_staff';

    const _PASSWORD_STAFF = 'password_staff';

    const _PASS_EXPIRE = 'pass_expire';

    const _TOKEN = 'token';

    const _ALLOW_BARCODE_LOGIN = 'allow_barcode_login';

    const _ACTIVE_STAFF = 'active_staff';

    const _REG_DATE = 'reg_date';

    const _ID_WAREHOUSE = 'id_warehouse';

    public $tableName = 'staff_list';

    /**
     * Database Operation: getByPrimaryKey
     *
     * 2022-02-10 11:06:43
     *
     *
     * @param int $id
     * @return \Model\\Stafflist
     */
    public function getByPrimaryKey(int $id)
    {
        return parent::getByPrimaryKey($id);
    }

    /**
     * Database Operation: fetchAll
     *
     * 2022-02-10 11:06:43
     *
     *
     * @param string $orderBy
     * @param int $int
     * @return \Model\\Stafflist[]
     */
    public function fetchAll(string $orderBy = 'id DESC', int $int = null)
    {
        return parent::fetchAll($orderBy, $int);
    }

    /**
     * Database Operation: fetchOneByField
     *
     * 2022-02-10 11:06:43
     *
     *
     * @param string $fieldName
     * @param int|string|boolean|array|null $fieldValue
     * @param string $operator
     * @return \Model\\Stafflist
     */
    public function fetchOneByField(string $fieldName, $fieldValue, string $operator = '=')
    {
        return parent::fetchOneByField($fieldName, $fieldValue, $operator);
    }

    /**
     * Database Operation: fetchAllByField
     *
     * 2022-02-10 11:06:43
     *
     *
     * @param string $fieldName
     * @param int|string|boolean|array|null $fieldValue
     * @param string $operator
     * @param string $orderBy
     * @param int $int
     * @return \Model\\Stafflist[]
     */
    public function fetchAllByField(string $fieldName, $fieldValue, string $operator = '=', string $orderBy = 'id DESC', int $int = null)
    {
        return parent::fetchAllByField($fieldName, $fieldValue, $operator, $orderBy, $int);
    }

    /**
     * Database Operation: fetchOneByFields
     *
     * 2022-02-10 11:06:43
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
     * @return \Model\\Stafflist
     */
    public function fetchOneByFields(array $fields)
    {
        return parent::fetchOneByFields($fields);
    }

    /**
     * Database Operation: fetchAllByFields
     *
     * 2022-02-10 11:06:43
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
     * @return \Model\\Stafflist[]
     */
    public function fetchAllByFields(array $fields, string $orderBy = 'id DESC', int $int = null)
    {
        return parent::fetchAllByFields($fields, $orderBy, $int);
    }

    /**
     * Database Operation: addOrUpdate
     *
     * 2022-02-10 11:06:43
     *
     *
     * @param \Model\\Stafflist $model
     * @return int
     */
    public function addOrUpdate($model)
    {
        return parent::addOrUpdate($model);
    }

    /**
     * Database Operation: add
     *
     * 2022-02-10 11:06:43
     *
     *
     * @param \Model\\Stafflist $model
     * @return int
     */
    public function add($model)
    {
        return parent::add($model);
    }

    /**
     * Database Operation: update
     *
     * 2022-02-10 11:06:43
     *
     *
     * @param \Model\\Stafflist $model
     * @return int
     */
    public function update($model)
    {
        return parent::update($model);
    }

    /**
     * Database Operation: deleteByPrimaryKey
     *
     * 2022-02-10 11:06:43
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