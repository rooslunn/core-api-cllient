<?php


namespace Pilulka\CoreApiClient\Model\Basket;

class BasketShipping
{
    /** @var  int */
    private $id;

    /** @var  int */
    private $basketId;

    /** @var  int|null */
    private $shippingId;

    /** @var  int|null */
    private $payId;

    /** @var  bool */
    private $useCredit;

    /** @var  string|null */
    private $voucherCode;

    /** @var int|null */
    private $voucherPrice;

    /** @var string|null */
    private $shippingData;

    /** @var string|null */
    private $payData;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BasketShipping
     */
    public function setId(int $id): BasketShipping
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
     * @return BasketShipping
     */
    public function setBasketId(int $basketId): BasketShipping
    {
        $this->basketId = $basketId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getShippingId()
    {
        return $this->shippingId;
    }

    /**
     * @param int|null $shippingId
     * @return BasketShipping
     */
    public function setShippingId($shippingId)
    {
        $this->shippingId = $shippingId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPayId()
    {
        return $this->payId;
    }

    /**
     * @param int|null $payId
     * @return BasketShipping
     */
    public function setPayId($payId)
    {
        $this->payId = $payId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUseCredit(): bool
    {
        return $this->useCredit;
    }

    /**
     * @param bool $useCredit
     * @return BasketShipping
     */
    public function setUseCredit(bool $useCredit): BasketShipping
    {
        $this->useCredit = $useCredit;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getVoucherCode()
    {
        return $this->voucherCode;
    }

    /**
     * @param null|string $voucherCode
     * @return BasketShipping
     */
    public function setVoucherCode($voucherCode)
    {
        $this->voucherCode = $voucherCode;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVoucherPrice(): ?int
    {
        return $this->voucherPrice;
    }

    /**
     * @param int|null $voucherPrice
     * @return BasketShipping
     */
    public function setVoucherPrice(?int $voucherPrice): BasketShipping
    {
        $this->voucherPrice = $voucherPrice;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getShippingData(): ?string
    {
        return $this->shippingData;
    }

    /**
     * @param null|string $shippingData
     * @return BasketShipping
     */
    public function setShippingData(?string $shippingData): BasketShipping
    {
        $this->shippingData = $shippingData;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPayData(): ?string
    {
        return $this->payData;
    }

    /**
     * @param null|string $payData
     * @return BasketShipping
     */
    public function setPayData(?string $payData): BasketShipping
    {
        $this->payData = $payData;
        return $this;
    }
}
