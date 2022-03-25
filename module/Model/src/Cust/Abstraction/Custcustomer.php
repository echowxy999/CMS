<?php
namespace Model\Cust\Abstraction;


abstract class Custcustomer
{

    public $id = null;

    public $emailCust = null;

    public $companyNameCust = null;

    public $contactNameCust = null;

    public $isActive = null;

    /**
     * Load data to Model Custcustomer from the given array
     *
     * 2022-02-10 11:10:46
     *
     * @param array $data
     */
    public function exchangeArray(array $data)
    {
        $this->id = !empty($data['id'])? $data['id'] : null;
        $this->emailCust = !empty($data['email_cust'])? $data['email_cust'] : null;
        $this->companyNameCust = !empty($data['company_name_cust'])? $data['company_name_cust'] : null;
        $this->contactNameCust = !empty($data['contact_name_cust'])? $data['contact_name_cust'] : null;
        $this->isActive = !empty($data['is_active'])? $data['is_active'] : null;
    }

    /**
     * Get array from Model Custcustomer
     *
     * 2022-02-10 11:10:46
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'email_cust' => $this->getEmailCust(),
            'company_name_cust' => $this->getCompanyNameCust(),
            'contact_name_cust' => $this->getContactNameCust(),
            'is_active' => $this->getIsActive(),
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

    public function getEmailCust()
    {
        return $this->emailCust;
    }

    public function setEmailCust($value)
    {
        $this->emailCust = $value;
        return $this;
    }

    public function getCompanyNameCust()
    {
        return $this->companyNameCust;
    }

    public function setCompanyNameCust($value)
    {
        $this->companyNameCust = $value;
        return $this;
    }

    public function getContactNameCust()
    {
        return $this->contactNameCust;
    }

    public function setContactNameCust($value)
    {
        $this->contactNameCust = $value;
        return $this;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setIsActive($value)
    {
        $this->isActive = $value;
        return $this;
    }


}