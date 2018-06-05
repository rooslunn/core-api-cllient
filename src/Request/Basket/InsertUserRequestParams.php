<?php


namespace Pilulka\CoreApiClient\Request\Basket;


final class InsertUserRequestParams
{
    /** @var string */
    private $name;

    /** @var string */
    private $surname;

    /** @var string */
    private $phone;

    /** @var string */
    private $email;

    /** @var string */
    private $street;

    /** @var string */
    private $city;

    /** @var string */
    private $postCode;

    /** @var string */
    private $firmName;

    /** @var string */
    private $ico;

    /** @var string */
    private $dic;

    /** @var string */
    private $delName;

    /** @var string */
    private $delSurname;

    /** @var string */
    private $delFirma;

    /** @var string */
    private $delStreet;

    /** @var string */
    private $delCity;

    /** @var string */
    private $delPostCode;

    /** @var string */
    private $note;

    /**
     * @param string $name
     * @return InsertUserRequestParams
     */
    public function setName(string $name): InsertUserRequestParams
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $surname
     * @return InsertUserRequestParams
     */
    public function setSurname(string $surname): InsertUserRequestParams
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @param string $phone
     * @return InsertUserRequestParams
     */
    public function setPhone(string $phone): InsertUserRequestParams
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string $email
     * @return InsertUserRequestParams
     */
    public function setEmail(string $email): InsertUserRequestParams
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $street
     * @return InsertUserRequestParams
     */
    public function setStreet(string $street): InsertUserRequestParams
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string $city
     * @return InsertUserRequestParams
     */
    public function setCity(string $city): InsertUserRequestParams
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $postCode
     * @return InsertUserRequestParams
     */
    public function setPostCode(string $postCode): InsertUserRequestParams
    {
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * @param string $firmName
     * @return InsertUserRequestParams
     */
    public function setFirmName(string $firmName): InsertUserRequestParams
    {
        $this->firmName = $firmName;
        return $this;
    }

    /**
     * @param string $ico
     * @return InsertUserRequestParams
     */
    public function setIco(string $ico): InsertUserRequestParams
    {
        $this->ico = $ico;
        return $this;
    }

    /**
     * @param string $dic
     * @return InsertUserRequestParams
     */
    public function setDic(string $dic): InsertUserRequestParams
    {
        $this->dic = $dic;
        return $this;
    }

    /**
     * @param string $delName
     * @return InsertUserRequestParams
     */
    public function setDelName(string $delName): InsertUserRequestParams
    {
        $this->delName = $delName;
        return $this;
    }

    /**
     * @param string $delSurname
     * @return InsertUserRequestParams
     */
    public function setDelSurname(string $delSurname): InsertUserRequestParams
    {
        $this->delSurname = $delSurname;
        return $this;
    }

    /**
     * @param string $delFirma
     * @return InsertUserRequestParams
     */
    public function setDelFirma(string $delFirma): InsertUserRequestParams
    {
        $this->delFirma = $delFirma;
        return $this;
    }

    /**
     * @param string $delStreet
     * @return InsertUserRequestParams
     */
    public function setDelStreet(string $delStreet): InsertUserRequestParams
    {
        $this->delStreet = $delStreet;
        return $this;
    }

    /**
     * @param string $delCity
     * @return InsertUserRequestParams
     */
    public function setDelCity(string $delCity): InsertUserRequestParams
    {
        $this->delCity = $delCity;
        return $this;
    }

    /**
     * @param string $delPostCode
     * @return InsertUserRequestParams
     */
    public function setDelPostCode(string $delPostCode): InsertUserRequestParams
    {
        $this->delPostCode = $delPostCode;
        return $this;
    }

    /**
     * @param string $note
     * @return InsertUserRequestParams
     */
    public function setNote(string $note): InsertUserRequestParams
    {
        $this->note = $note;
        return $this;
    }
}