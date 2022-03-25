<?php
namespace Model\Cust\Abstraction;


abstract class Custqbinfo
{

    public $idCust = null;

    public $name = null;

    public $idQb = null;

    public $urlCust = null;

    /**
     * Load data to Model Custqbinfo from the given array
     *
     * 2022-02-02 11:18:55
     *
     * @param array $data
     */
    public function exchangeArray(array $data)
    {
        $this->idCust = !empty($data['id_cust'])? $data['id_cust'] : null;
        $this->name = !empty($data['name'])? $data['name'] : null;
        $this->idQb = !empty($data['id_qb'])? $data['id_qb'] : null;
        $this->urlCust = !empty($data['url_cust'])? $data['url_cust'] : null;
    }

    /**
     * Get array from Model Custqbinfo
     *
     * 2022-02-02 11:18:55
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id_cust' => $this->getIdCust(),
            'name' => $this->getName(),
            'id_qb' => $this->getIdQb(),
            'url_cust' => $this->getUrlCust(),
        ];
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

    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }

    public function getIdQb()
    {
        return $this->idQb;
    }

    public function setIdQb($value)
    {
        $this->idQb = $value;
        return $this;
    }

    public function getUrlCust()
    {
        return $this->urlCust;
    }

    public function setUrlCust($value)
    {
        $this->urlCust = $value;
        return $this;
    }


}