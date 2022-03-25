<?php
namespace Model\Sys\Abstraction;


abstract class Sysdashboard
{

    public $id = null;

    public $custId = null;

    public $date = null;

    public $holdCount = null;

    public $cpImportCount = null;

    public $notletterImportCount = null;

    public $cpShipmentCount = null;

    /**
     * Load data to Model Sysdashboard from the given array
     *
     * 2022-02-22 18:06:18
     *
     * @param array $data
     */
    public function exchangeArray(array $data)
    {
        $this->id = !empty($data['id'])? $data['id'] : null;
        $this->custId = !empty($data['cust_id'])? $data['cust_id'] : null;
        $this->date = !empty($data['date'])? $data['date'] : null;
        $this->holdCount = !empty($data['hold_count'])? $data['hold_count'] : null;
        $this->cpImportCount = !empty($data['cp_import_count'])? $data['cp_import_count'] : null;
        $this->notletterImportCount = !empty($data['notletter_import_count'])? $data['notletter_import_count'] : null;
        $this->cpShipmentCount = !empty($data['cp_shipment_count'])? $data['cp_shipment_count'] : null;
    }

    /**
     * Get array from Model Sysdashboard
     *
     * 2022-02-22 18:06:18
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'cust_id' => $this->getCustId(),
            'date' => $this->getDate(),
            'hold_count' => $this->getHoldCount(),
            'cp_import_count' => $this->getCpImportCount(),
            'notletter_import_count' => $this->getNotletterImportCount(),
            'cp_shipment_count' => $this->getCpShipmentCount(),
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

    public function getCustId()
    {
        return $this->custId;
    }

    public function setCustId($value)
    {
        $this->custId = $value;
        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($value)
    {
        $this->date = $value;
        return $this;
    }

    public function getHoldCount()
    {
        return $this->holdCount;
    }

    public function setHoldCount($value)
    {
        $this->holdCount = $value;
        return $this;
    }

    public function getCpImportCount()
    {
        return $this->cpImportCount;
    }

    public function setCpImportCount($value)
    {
        $this->cpImportCount = $value;
        return $this;
    }

    public function getNotletterImportCount()
    {
        return $this->notletterImportCount;
    }

    public function setNotletterImportCount($value)
    {
        $this->notletterImportCount = $value;
        return $this;
    }

    public function getCpShipmentCount()
    {
        return $this->cpShipmentCount;
    }

    public function setCpShipmentCount($value)
    {
        $this->cpShipmentCount = $value;
        return $this;
    }


}