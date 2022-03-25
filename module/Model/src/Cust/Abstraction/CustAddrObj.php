<?php

namespace Model\Cust\Abstraction;

class CustAddrObj
{
//    public $custid = null;

    public $custAddrBillName = null;

    public $custAddrCompanyName = null;

    public $custAddrAbn = null;

    public $custAddrLine1 = null;

    public $custAddrLine2 = null;

    public $custAddrLine3 = null;

    public $custAddrSuburb = null;

    public $custAddrPostcode = null;

    public $custAddrPhone = null;

    public $custAddrEmail = null;

    /**
     * @return null
     */
    public function getCustAddrLine1()
    {
        return $this->custAddrLine1;
    }

    /**
     * @return null
     */
    public function getCustAddrLine2()
    {
        return $this->custAddrLine2;
    }

    /**
     * @param null $custAddrLine2
     */
    public function setCustAddrLine2($custAddrLine2): void
    {
        $this->custAddrLine2 = $custAddrLine2;
    }

    /**
     * @return null
     */
    public function getCustAddrLine3()
    {
        return $this->custAddrLine3;
    }

    /**
     * @param null $custAddrLine3
     */
    public function setCustAddrLine3($custAddrLine3): void
    {
        $this->custAddrLine3 = $custAddrLine3;
    }

    /**
     * @return null
     */
    public function getCustAddrSuburb()
    {
        return $this->custAddrSuburb;
    }

    /**
     * @param null $custAddrSuburb
     */
    public function setCustAddrSuburb($custAddrSuburb): void
    {
        $this->custAddrSuburb = $custAddrSuburb;
    }

    /**
     * @return null
     */
    public function getCustAddrPostcode()
    {
        return $this->custAddrPostcode;
    }

    /**
     * @param null $custAddrPostcode
     */
    public function setCustAddrPostcode($custAddrPostcode): void
    {
        $this->custAddrPostcode = $custAddrPostcode;
    }

    /**
     * @return null
     */
    public function getCustAddrPhone()
    {
        return $this->custAddrPhone;
    }

    /**
     * @param null $custAddrPhone
     */
    public function setCustAddrPhone($custAddrPhone): void
    {
        $this->custAddrPhone = $custAddrPhone;
    }

    /**
     * @return null
     */
    public function getCustAddrEmail()
    {
        return $this->custAddrEmail;
    }

    /**
     * @param null $custAddrEmail
     */
    public function setCustAddrEmail($custAddrEmail): void
    {
        $this->custAddrEmail = $custAddrEmail;
    }

    /**
     * @param null $custAddrLine1
     */
    public function setCustAddrLine1($custAddrLine1): void
    {
        $this->custAddrLine1 = $custAddrLine1;
    }


    /**
     * @return null
     */
    public function getCustAddrBillName()
    {
        return $this->custAddrBillName;
    }

    /**
     * @param null $custAddrBillName
     */
    public function setCustAddrBillName($custAddrBillName): void
    {
        $this->custAddrBillName = $custAddrBillName;
    }

    /**
     * @return null
     */
    public function getCustAddrCompanyName()
    {
        return $this->custAddrCompanyName;
    }

    /**
     * @param null $custAddrCompanyName
     */
    public function setCustAddrCompanyName($custAddrCompanyName): void
    {
        $this->custAddrCompanyName = $custAddrCompanyName;
    }

    /**
     * @return null
     */
    public function getCustAddrAbn()
    {
        return $this->custAddrAbn;
    }

    /**
     * @param null $custAddrAbn
     */
    public function setCustAddrAbn($custAddrAbn): void
    {
        $this->custAddrAbn = $custAddrAbn;
    }


}