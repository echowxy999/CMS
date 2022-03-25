<?php
namespace Dbset\Cust;

use CustAddrObj;

class CustextraattributeTable extends \Dbset\Cust\Abstraction\CustextraattributeTable
{
    public function fetchByAttributeId($id)
    {

        $rows =$this->fetchAllByField('id_attribute',$id);


        if(empty($rows)) return false;

        $arrRes = array();
        foreach ($rows as $row) {
            $arrRes[$row->idCust] = $row->valueAttribute;
        }
        return $arrRes;


    }



}