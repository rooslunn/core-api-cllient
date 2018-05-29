<?php

namespace Pilulka\CoreApiClient\Model\Voucher;

/**
 * Class Voucher
 * @package Pilulka\CoreApiClient\Model\Voucher
 */
class Voucher
{
    /** sleva na přesnou částku */
    const SALE_TYPE_AMOUNT = 1;
    /** sleva v procentech */
    const SALE_TYPE_PERCENTAGE = 2;

    /** poukaz lze použít pouze jednorázově */
    const LIMIT_TYPE_ONLY_ONCE = 1;
    /** poukaz může použít pouze registrovaný uživatel a pouze jednou */
    const LIMIT_TYPE_ONLY_ONCE_PER_USER = 2;
    /** poukaz lze použít vícekrát bez omezení */
    const LIMIT_TYPE_NO_RESTRICTIONS = 3;

    /** slevový poukaz */
    const VOUCHER_TYPE_SALE = 1;
    /** dárkový poukaz */
    const VOUCHER_TYPE_GIFT = 2;


    /** @var int */
    private $id;
    /** @var string */
    private $name;
    /** @var string */
    private $code;
    /** @var int */
    private $voucherType;
    /** @var int */
    private $limitType;
    /** @var int */
    private $saleType;
    /** @var float */
    private $minOrderAmount;
    /** @var float */
    private $voucherValue;
    /** @var \DateTime */
    private $validFrom;
    /** @var \DateTime */
    private $validTo;
    /** @var ?array */
    private $validProducts;
    /** @var ?array */
    private $validBrands;
    /** @var ?array */
    private $validCategories;
    /** @var ?array */
    private $validManufacturers;
    /** @var ?array */
    private $validDeliveryMethods;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Voucher
     */
    public function setId(int $id) : Voucher
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Voucher
     */
    public function setName(string $name) : Voucher
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Voucher
     */
    public function setCode(string $code) : Voucher
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getVoucherType() : int
    {
        return $this->voucherType;
    }

    /**
     * @param int $voucherType
     * @return Voucher
     */
    public function setVoucherType(int $voucherType) : Voucher
    {
        $this->voucherType = $voucherType;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitType() : int
    {
        return $this->limitType;
    }

    /**
     * @param int $limitType
     * @return Voucher
     */
    public function setLimitType(int $limitType) : Voucher
    {
        $this->limitType = $limitType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSaleType() : int
    {
        return $this->saleType;
    }

    /**
     * @param int $saleType
     * @return Voucher
     */
    public function setSaleType(int $saleType) : Voucher
    {
        $this->saleType = $saleType;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMinOrderAmount(): ?float
    {
        return $this->minOrderAmount;
    }

    /**
     * @param float|null $minOrderAmount
     * @return Voucher
     */
    public function setMinOrderAmount(?float $minOrderAmount): Voucher
    {
        $this->minOrderAmount = $minOrderAmount;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getVoucherValue(): ?float
    {
        return $this->voucherValue;
    }

    /**
     * @param float $voucherValue
     * @return Voucher
     */
    public function setVoucherValue(float $voucherValue): Voucher
    {
        $this->voucherValue = $voucherValue;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom(): ?\DateTime
    {
        return $this->validFrom;
    }

    /**
     * @param \DateTime $validFrom
     * @return Voucher
     */
    public function setValidFrom(\DateTime $validFrom): Voucher
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidTo(): ?\DateTime
    {
        return $this->validTo;
    }

    /**
     * @param \DateTime $validTo
     * @return Voucher
     */
    public function setValidTo(\DateTime $validTo): Voucher
    {
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidProducts()
    {
        return $this->validProducts;
    }

    /**
     * @param mixed $validProducts
     * @return Voucher
     */
    public function setValidProducts($validProducts)
    {
        $this->validProducts = $validProducts;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidBrands()
    {
        return $this->validBrands;
    }

    /**
     * @param mixed $validBrands
     * @return Voucher
     */
    public function setValidBrands($validBrands)
    {
        $this->validBrands = $validBrands;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidCategories()
    {
        return $this->validCategories;
    }

    /**
     * @param mixed $validCategories
     * @return Voucher
     */
    public function setValidCategories($validCategories)
    {
        $this->validCategories = $validCategories;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidManufacturers()
    {
        return $this->validManufacturers;
    }

    /**
     * @param mixed $validManufacturers
     * @return Voucher
     */
    public function setValidManufacturers($validManufacturers)
    {
        $this->validManufacturers = $validManufacturers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidDeliveryMethods()
    {
        return $this->validDeliveryMethods;
    }

    /**
     * @param mixed $validDeliveryMethods
     * @return Voucher
     */
    public function setValidDeliveryMethods($validDeliveryMethods)
    {
        $this->validDeliveryMethods = $validDeliveryMethods;
        return $this;
    }
}
