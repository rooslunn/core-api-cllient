<?php

namespace Pilulka\CoreApiClient\Model\Basket;

class BasketUser
{
    /** @var  int */
    private $id;

    /** @var  int */
    private $basketId;

    /** @var  string */
    private $name;

    /** @var  string */
    private $surname;

    /** @var  string */
    private $phone;

    /** @var  string */
    private $email;

    /** @var  string */
    private $street;

    /** @var  string */
    private $city;

    /** @var  string */
    private $postCode;

    /** @var  string|null */
    private $firmName;

    /** @var  string|null */
    private $ico;

    /** @var  string|null */
    private $dic;

    /** @var  string|null */
    private $delName;

    /** @var  string|null */
    private $delSurname;

    /** @var  string|null */
    private $delFirma;

    /** @var  string|null */
    private $delStreet;

    /** @var  string|null */
    private $delCity;

    /** @var  string|null */
    private $delPostCode;

    /** @var  string|null */
    private $note;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BasketUser
     */
    public function setId(int $id): BasketUser
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getBasketId(): int
    {
        return $this->basketId;
    }

    /**
     * @param int $basketId
     * @return BasketUser
     */
    public function setBasketId(int $basketId): BasketUser
    {
        $this->basketId = $basketId;
        return $this;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return BasketUser
     */
    public function setName(string $name): BasketUser
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return BasketUser
     */
    public function setSurname(string $surname): BasketUser
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return BasketUser
     */
    public function setPhone(string $phone): BasketUser
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return BasketUser
     */
    public function setEmail(string $email): BasketUser
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return BasketUser
     */
    public function setStreet(string $street): BasketUser
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return BasketUser
     */
    public function setCity(string $city): BasketUser
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     * @return BasketUser
     */
    public function setPostCode(string $postCode): BasketUser
    {
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getFirmName()
    {
        return $this->firmName;
    }

    /**
     * @param null|string $firmName
     * @return BasketUser
     */
    public function setFirmName($firmName)
    {
        $this->firmName = $firmName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIco()
    {
        return $this->ico;
    }

    /**
     * @param null|string $ico
     * @return BasketUser
     */
    public function setIco($ico)
    {
        $this->ico = $ico;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDic()
    {
        return $this->dic;
    }

    /**
     * @param null|string $dic
     * @return BasketUser
     */
    public function setDic($dic)
    {
        $this->dic = $dic;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDelName()
    {
        return $this->delName;
    }

    /**
     * @param null|string $delName
     * @return BasketUser
     */
    public function setDelName($delName)
    {
        $this->delName = $delName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDelSurname()
    {
        return $this->delSurname;
    }

    /**
     * @param null|string $delSurname
     * @return BasketUser
     */
    public function setDelSurname($delSurname)
    {
        $this->delSurname = $delSurname;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDelFirma()
    {
        return $this->delFirma;
    }

    /**
     * @param null|string $delFirma
     * @return BasketUser
     */
    public function setDelFirma($delFirma)
    {
        $this->delFirma = $delFirma;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDelStreet()
    {
        return $this->delStreet;
    }

    /**
     * @param null|string $delStreet
     * @return BasketUser
     */
    public function setDelStreet($delStreet)
    {
        $this->delStreet = $delStreet;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDelCity()
    {
        return $this->delCity;
    }

    /**
     * @param null|string $delCity
     * @return BasketUser
     */
    public function setDelCity($delCity)
    {
        $this->delCity = $delCity;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDelPostCode()
    {
        return $this->delPostCode;
    }

    /**
     * @param null|string $delPostCode
     * @return BasketUser
     */
    public function setDelPostCode($delPostCode)
    {
        $this->delPostCode = $delPostCode;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param null|string $note
     * @return BasketUser
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }
}
