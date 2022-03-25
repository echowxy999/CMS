<?php
namespace Dbset\Staff;


use Laminas\Db\Sql\Select;
use Laminas\Db\TableGateway\TableGatewayInterface;

class StafflistTable extends \Dbset\Staff\Abstraction\StafflistTable
{

    public function fetchAccountByEmail(string $email)
    {
        $select = new Select();
        $select->from($this->tableName);
        $select->where("email_staff LIKE '".$email."'");
        $results = $this->tableGateway->selectWith($select);
        $row = $results->current();

        return $row;


    }


}