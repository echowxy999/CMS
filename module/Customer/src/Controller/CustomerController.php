<?php

namespace Customer\Controller;

use Dbset\Cust\CustAddrObjSet;
use Dbset\Cust\CustcustomerattributeTable;
use Dbset\Cust\CustcustomerTable;
use Dbset\Cust\CustextraattributeTable;
use Dbset\Cust\CustqbinfoTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;


use Model\Cust\CustAddrObj;
use Model\Cust\Custcustomer;
use Model\Cust\Custcustomerattribute;


class CustomerController extends AbstractActionController
{
    protected  $custqbinfoSet, $custcustomerSet, $custcustomerattributeSet, $custextraattributeSet;

    public function __construct(CustqbinfoTable $custqbinfoSet, CustcustomerTable $custcustomerSet,
        CustextraattributeTable $custextraattributeSet, CustcustomerattributeTable $custcustomerattributeSet)
    {
        $this->custqbinfoSet = $custqbinfoSet;
        $this->custcustomerSet = $custcustomerSet;
        $this->custcustomerattributeSet = $custcustomerattributeSet;
        $this->custextraattributeSet = $custextraattributeSet;

    }



    public function customerAddAction()
    {

        if (isset ($_POST ['btn_add_customer'])) {

            $contName = $_POST['cont_name'];
            $compName = $_POST['comp_name'];
            $email = $_POST['email'];
            $isActive = $_POST['is_active'];
            if (is_null($isActive)){
                $isActive = 0;
            }

            if (!empty($compName) and !empty($email)){

                $cust = new Custcustomer();
                $cust->setCompanyNameCust($compName);
                $cust->setContactNameCust($contName);
                $cust->setEmailCust($email);
                $cust->setIsActive($isActive);

                if ($this->custcustomerSet->add($cust)){
                    return $this->redirect()->toUrl("/customer/customer-list");
                }

            }
            else{
                echo "Please input correct information!!";
            }

        }

        $viewModel = new ViewModel([
            'title' => 'Customer',
            'bc' => ['Customer','Customer List','Add New Customer']
        ]);
        $viewModel->setTerminal(true);
        return $viewModel;

    }

    public function customerDeleteAction()
    {

    }


    public function customerViewAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);

        $cust = $this->custcustomerSet->getByPrimaryKey($id);


        $custAddrObjSet = new CustAddrObjSet($this->custextraattributeSet, $this->custcustomerattributeSet,$id);

        $custObj = $custAddrObjSet->fetchByCustId($id,$this->custcustomerattributeSet, $this->custextraattributeSet);

        $custEmail = $custObj->custAddrEmail;



        $viewModel = new ViewModel([
            'title' => 'Customer',
            'bc' => ['Customer','Customer List','Customer Detail'],
            'cust' => $cust,
            'email' => $custEmail
        ]);
        $viewModel->setTerminal(true);
        return $viewModel;

    }

    public function customerListAction()
    {
        $custList = $this->custcustomerSet->fetchAll();

        $viewModel = new ViewModel([
            'title' => 'Customer',
            'bc' => ['Customer','Customer List'],
            'custinfo' => $custList,
        ]);
        $viewModel->setTerminal(true);
        return $viewModel;

    }


    public function customerEditAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        $cust = $this->custcustomerSet->getByPrimaryKey($id);

        if (isset ($_POST ['btn_update_customer'])) {

            $contName = $_POST['cont_name'];
            $compName = $_POST['comp_name'];
            $email = $_POST['email'];
            $isActive = $_POST['is_active'];
            if (is_null($isActive)){
                $isActive = 0;
            }

            if (!empty($compName) and !empty($email)){

                $cust = new Custcustomer();
                $cust->setId($id);
                $cust->setCompanyNameCust($compName);
                $cust->setContactNameCust($contName);
                $cust->setEmailCust($email);
                $cust->setIsActive($isActive);

                if ($this->custcustomerSet->update($cust)){
                    return $this->redirect()->toUrl("/customer/customer-list");
                }

            }
            else{
                echo "Please input correct information!!";
            }

        }


        $viewModel = new ViewModel([
            'title' => 'Customer',
            'bc' => ['Customer','Customer List','Customer Edit'],
            'cust' => $cust
        ]);
        $viewModel->setTerminal(true);
        return $viewModel;

    }

    public function customerExtraAttributeAction()
    {
        if (isset ($_POST ['btn_add_attribute'])) {

            $attriName = $_POST['attri_name'];
            $attriKey = $_POST['key_name'];

            if (!empty($attriName) and !empty($attriKey)){

                $attri = new Custcustomerattribute();

                $attri->setNameAttribute($attriName);
                $attri->setKeyAttribute($attriKey);
                $attri->setDisabled(0);

                //Order needs to change later
                $attri->setOrderAttribute(1);

                if ($this->custcustomerattributeSet->add($attri)){
                    return $this->redirect()->toUrl("/customer/customer-list/customer-extra-attribute");
                }

            }

        }
        if (isset ($_POST ['btn_update_attribute'])) {

            $id = ($_POST['btn_update_attribute']);
            $attriName = $_POST['update_name'][$id];
            $attriKey = $_POST['update_key'][$id];

            if (!empty($attriName) and !empty($attriKey)){

                $attri = new Custcustomerattribute();
                $attri->setId($id);
                $attri->setNameAttribute($attriName);
                $attri->setKeyAttribute($attriKey);

                if ($this->custcustomerattributeSet->update($attri)){
                    return $this->redirect()->toUrl("/customer/customer-list/customer-extra-attribute");
                }

            }

        }
        if (isset ($_POST ['btn_disable_attribute'])) {

            $id = ($_POST['btn_disable_attribute']);
            $attribute = $this->custcustomerattributeSet->getByPrimaryKey($id);
            $attriName = $_POST['update_name'][$id];
            $attriKey = $_POST['update_key'][$id];
            $disabled = intval($attribute->disabled) == 1?0:1;

            $attri = new Custcustomerattribute();
            $attri->setId($id);
            $attri->setNameAttribute($attriName);
            $attri->setKeyAttribute($attriKey);
            $attri->setDisabled($disabled);

            if ($this->custcustomerattributeSet->update($attri)){
                return $this->redirect()->toUrl("/customer/customer-list/customer-extra-attribute");
            }

        }





        $attriList = $this->custcustomerattributeSet->fetchAll();

        $viewModel = new ViewModel([
            'attrilist' => $attriList,
            'pageScriptFile' => '<script src="/assets/js/app/customer-extra-attribute.js"></script>',
            'pageCssFile' => '<link href="/assets/libs/mohithg-switchery/switchery.min.css" rel="stylesheet" type="text/css" />'
        ]);
        $viewModel->setTerminal(true);
        return $viewModel;

    }

    public function displayExtraAttribute()
    {

    }



}