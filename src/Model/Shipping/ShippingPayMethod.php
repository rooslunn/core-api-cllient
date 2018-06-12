<?php


namespace Pilulka\CoreApiClient\Model\Shipping;

class ShippingPayMethod
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $method;

    /** @var  string */
    private $title;

    /** @var  float */
    private $fee;

    /** @var  int */
    private $sort;

    /** @var string|null */
    private $description;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ShippingPayMethod
     */
    public function setId(int $id): ShippingPayMethod
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return ShippingPayMethod
     */
    public function setMethod(string $method): ShippingPayMethod
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return ShippingPayMethod
     */
    public function setTitle(string $title): ShippingPayMethod
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return float
     */
    public function getFee(): float
    {
        return $this->fee;
    }

    /**
     * @param float $fee
     * @return ShippingPayMethod
     */
    public function setFee(float $fee): ShippingPayMethod
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * @return int
     */
    public function getSort(): int
    {
        return $this->sort;
    }

    /**
     * @param int $sort
     * @return ShippingPayMethod
     */
    public function setSort(int $sort): ShippingPayMethod
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     * @return ShippingPayMethod
     */
    public function setDescription(?string $description): ShippingPayMethod
    {
        $this->description = $description;
        return $this;
    }

}
