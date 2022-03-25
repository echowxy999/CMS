<?php
namespace Model\Staff\Abstraction;


abstract class Stafflist
{

    public $id = null;

    public $idCust = null;

    public $barcodeStaff = null;

    public $emailStaff = null;

    public $nameStaff = null;

    public $passwordStaff = null;

    public $passExpire = null;

    public $token = null;

    public $allowBarcodeLogin = null;

    public $activeStaff = null;

    public $regDate = null;

    public $idWarehouse = null;

    /**
     * Load data to Model Stafflist from the given array
     *
     * 2022-02-10 11:06:43
     *
     * @param array $data
     */
    public function exchangeArray(array $data)
    {
        $this->id = !empty($data['id'])? $data['id'] : null;
        $this->idCust = !empty($data['id_cust'])? $data['id_cust'] : null;
        $this->barcodeStaff = !empty($data['barcode_staff'])? $data['barcode_staff'] : null;
        $this->emailStaff = !empty($data['email_staff'])? $data['email_staff'] : null;
        $this->nameStaff = !empty($data['name_staff'])? $data['name_staff'] : null;
        $this->passwordStaff = !empty($data['password_staff'])? $data['password_staff'] : null;
        $this->passExpire = !empty($data['pass_expire'])? $data['pass_expire'] : null;
        $this->token = !empty($data['token'])? $data['token'] : null;
        $this->allowBarcodeLogin = !empty($data['allow_barcode_login'])? $data['allow_barcode_login'] : null;
        $this->activeStaff = !empty($data['active_staff'])? $data['active_staff'] : null;
        $this->regDate = !empty($data['reg_date'])? $data['reg_date'] : null;
        $this->idWarehouse = !empty($data['id_warehouse'])? $data['id_warehouse'] : null;
    }

    /**
     * Get array from Model Stafflist
     *
     * 2022-02-10 11:06:43
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'id_cust' => $this->getIdCust(),
            'barcode_staff' => $this->getBarcodeStaff(),
            'email_staff' => $this->getEmailStaff(),
            'name_staff' => $this->getNameStaff(),
            'password_staff' => $this->getPasswordStaff(),
            'pass_expire' => $this->getPassExpire(),
            'token' => $this->getToken(),
            'allow_barcode_login' => $this->getAllowBarcodeLogin(),
            'active_staff' => $this->getActiveStaff(),
            'reg_date' => $this->getRegDate(),
            'id_warehouse' => $this->getIdWarehouse(),
        ];
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }

    public function getIdCust()
    {
        return $this->idCust;
    }

    public function setIdCust($value)
    {
        $this->idCust = $value;
        return $this;
    }

    public function getBarcodeStaff()
    {
        return $this->barcodeStaff;
    }

    public function setBarcodeStaff($value)
    {
        $this->barcodeStaff = $value;
        return $this;
    }

    public function getEmailStaff()
    {
        return $this->emailStaff;
    }

    public function setEmailStaff($value)
    {
        $this->emailStaff = $value;
        return $this;
    }

    public function getNameStaff()
    {
        return $this->nameStaff;
    }

    public function setNameStaff($value)
    {
        $this->nameStaff = $value;
        return $this;
    }

    public function getPasswordStaff()
    {
        return $this->passwordStaff;
    }

    public function setPasswordStaff($value)
    {
        $this->passwordStaff = $value;
        return $this;
    }

    public function getPassExpire()
    {
        return $this->passExpire;
    }

    public function setPassExpire($value)
    {
        $this->passExpire = $value;
        return $this;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($value)
    {
        $this->token = $value;
        return $this;
    }

    public function getAllowBarcodeLogin()
    {
        return $this->allowBarcodeLogin;
    }

    public function setAllowBarcodeLogin($value)
    {
        $this->allowBarcodeLogin = $value;
        return $this;
    }

    public function getActiveStaff()
    {
        return $this->activeStaff;
    }

    public function setActiveStaff($value)
    {
        $this->activeStaff = $value;
        return $this;
    }

    public function getRegDate()
    {
        return $this->regDate;
    }

    public function setRegDate($value)
    {
        $this->regDate = $value;
        return $this;
    }

    public function getIdWarehouse()
    {
        return $this->idWarehouse;
    }

    public function setIdWarehouse($value)
    {
        $this->idWarehouse = $value;
        return $this;
    }


}