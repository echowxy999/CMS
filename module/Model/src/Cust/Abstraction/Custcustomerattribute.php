<?php
namespace Model\Cust\Abstraction;


abstract class Custcustomerattribute
{

    public $id = null;

    public $nameAttribute = null;

    public $keyAttribute = null;

    public $orderAttribute = null;

    public $disabled = null;

    /**
     * Load data to Model Custcustomerattribute from the given array
     *
     * 2022-02-17 11:16:25
     *
     * @param array $data
     */
    public function exchangeArray(array $data)
    {
        $this->id = !empty($data['id'])? $data['id'] : null;
        $this->nameAttribute = !empty($data['name_attribute'])? $data['name_attribute'] : null;
        $this->keyAttribute = !empty($data['key_attribute'])? $data['key_attribute'] : null;
        $this->orderAttribute = !empty($data['order_attribute'])? $data['order_attribute'] : null;
        $this->disabled = !empty($data['disabled'])? $data['disabled'] : null;
    }

    /**
     * Get array from Model Custcustomerattribute
     *
     * 2022-02-17 11:16:25
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'name_attribute' => $this->getNameAttribute(),
            'key_attribute' => $this->getKeyAttribute(),
            'order_attribute' => $this->getOrderAttribute(),
            'disabled' => $this->getDisabled(),
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

    public function getNameAttribute()
    {
        return $this->nameAttribute;
    }

    public function setNameAttribute($value)
    {
        $this->nameAttribute = $value;
        return $this;
    }

    public function getKeyAttribute()
    {
        return $this->keyAttribute;
    }

    public function setKeyAttribute($value)
    {
        $this->keyAttribute = $value;
        return $this;
    }

    public function getOrderAttribute()
    {
        return $this->orderAttribute;
    }

    public function setOrderAttribute($value)
    {
        $this->orderAttribute = $value;
        return $this;
    }

    public function getDisabled()
    {
        return $this->disabled;
    }

    public function setDisabled($value)
    {
        $this->disabled = $value;
        return $this;
    }


}