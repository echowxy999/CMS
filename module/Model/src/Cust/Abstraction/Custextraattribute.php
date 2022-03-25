<?php
namespace Model\Cust\Abstraction;


abstract class Custextraattribute
{

    public $id = null;

    public $idCust = null;

    public $idAttribute = null;

    public $valueAttribute = null;

    public $dateUpdate = null;

    public $staffUpdate = null;

    /**
     * Load data to Model Custextraattribute from the given array
     *
     * 2022-02-16 12:18:39
     *
     * @param array $data
     */
    public function exchangeArray(array $data)
    {
        $this->id = !empty($data['id'])? $data['id'] : null;
        $this->idCust = !empty($data['id_cust'])? $data['id_cust'] : null;
        $this->idAttribute = !empty($data['id_attribute'])? $data['id_attribute'] : null;
        $this->valueAttribute = !empty($data['value_attribute'])? $data['value_attribute'] : null;
        $this->dateUpdate = !empty($data['date_update'])? $data['date_update'] : null;
        $this->staffUpdate = !empty($data['staff_update'])? $data['staff_update'] : null;
    }

    /**
     * Get array from Model Custextraattribute
     *
     * 2022-02-16 12:18:39
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'id_cust' => $this->getIdCust(),
            'id_attribute' => $this->getIdAttribute(),
            'value_attribute' => $this->getValueAttribute(),
            'date_update' => $this->getDateUpdate(),
            'staff_update' => $this->getStaffUpdate(),
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

    public function getIdAttribute()
    {
        return $this->idAttribute;
    }

    public function setIdAttribute($value)
    {
        $this->idAttribute = $value;
        return $this;
    }

    public function getValueAttribute()
    {
        return $this->valueAttribute;
    }

    public function setValueAttribute($value)
    {
        $this->valueAttribute = $value;
        return $this;
    }

    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    public function setDateUpdate($value)
    {
        $this->dateUpdate = $value;
        return $this;
    }

    public function getStaffUpdate()
    {
        return $this->staffUpdate;
    }

    public function setStaffUpdate($value)
    {
        $this->staffUpdate = $value;
        return $this;
    }


}