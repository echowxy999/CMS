<?php

namespace Dbset\Cust;
use Dbset\Cust\CustcustomerattributeTable;
use Model\Cust\CustAddrObj;

use Dbset\Cust\CustextraattributeTable;

class CustAddrObjSet
{

    public $_custextraattributeSet;
    public $_custcustomerattributeSet;
    public $_idCust;

     function __construct(CustextraattributeTable $custextraattributeSet, CustcustomerattributeTable $custcustomerattributeSet,
        $idCust){

        $this->_custextraattributeTable = $custextraattributeSet;
        $this->_custcustomerattributeTable = $custcustomerattributeSet;
        $this->_idCust = $idCust;


    }

    public function getAttributeKeys(){
        $arrName = array();
        $addrObj = new CustAddrObj();
        $attributeNames = get_object_vars($addrObj);


        foreach ($attributeNames as $key => $name){
            $key = preg_replace('/\B([A-Z])/', '_$1', $key);
            $arrName[] = strtolower($key);
        }

        return $arrName;
    }

    public function getAttributeNames(CustcustomerattributeTable $custcustomerattributeSet){
         $arrRes = array();

        $keys = $this->getAttributeKeys();

        foreach ($keys as $key){
            $row = $custcustomerattributeSet->fetchOneByField('key_attribute',$key);
            $arrTemp['id_attribute'] = $row->id;
            $arrTemp['key_attribute'] = $key;
            $arrTemp['name_attribute'] = $row->nameAttribute;
            $arrRes[] = $arrTemp;
        }

        return $arrRes;

    }

    public function getAttributeValues(CustcustomerattributeTable $custcustomerattributeSet , CustextraattributeTable $custextraattributeSet){
         $attributeInfo = $this->getAttributeNames($custcustomerattributeSet);


         $arrTemp = array();
         $arrAttribute = array();

        //fetch all value records of CustAddrObj
         foreach ($attributeInfo as  $attribute){
             $keyAttribute = $attribute['key_attribute'];
             $nameAttribute = $attribute['name_attribute'];
             $idAttribute = $attribute['id_attribute'];
             $rows = $custextraattributeSet->fetchAllByField('id_attribute',$idAttribute);
             foreach ($rows as $row){
                 $arrTemp['id_cust'] = $row->idCust;
                 $arrTemp['name_attribute'] = $nameAttribute;
                 $arrTemp['value_attribute'] = $row->valueAttribute;
                 $arrTemp['key'] = $keyAttribute;
                 $arrAttribute[] = $arrTemp;
             }
         }


         return $arrAttribute;

    }

    public function fetchByCustId($idCust,CustcustomerattributeTable $custcustomerattributeSet, CustextraattributeTable $custextraattributeSet){
         $attributeAll = $this->getAttributeValues($custcustomerattributeSet,$custextraattributeSet);


         foreach ($attributeAll as $attribute){
             if ($attribute['id_cust'] == $idCust){
                 $key = $attribute['key'];
                 $objVar = preg_replace_callback('/_([a-z]?)/', function($match) {
                     return strtoupper($match[1]);
                 }, $key);
                 $rows[$objVar] = $attribute['value_attribute'];
             }
         }

         $resultObj = $this->hydrator($rows);


         return $resultObj;


    }




    public function hydrator($rows)
    {
        $rowModel = new CustAddrObj();

        $rowModel->setCustAddrBillName($rows['custAddrBillName']);
        $rowModel->setCustAddrCompanyName($rows['custAddrCompanyName']);
        $rowModel->setCustAddrAbn($rows['custAddrAbn']);
        $rowModel->setCustAddrLine1($rows['custAddrLine1']);
        $rowModel->setCustAddrLine2($rows['custAddrLine2']);
        $rowModel->setCustAddrLine3($rows['custAddrLine3']);
        $rowModel->setCustAddrSuburb($rows['custAddrSuburb']);
        $rowModel->setCustAddrPostcode($rows['custAddrPostcode']);
        $rowModel->setCustAddrPhone($rows['custAddrPhone']);
        $rowModel->setCustAddrEmail($rows['custAddrEmail']);

        return $rowModel;
    }
}