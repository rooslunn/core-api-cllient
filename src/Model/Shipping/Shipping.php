<?php


namespace Pilulka\CoreApiClient\Model\Shipping;

class Shipping
{
    const TYPE_ZASILKOVNA = 'zasilkovna';
    const TYPE_PHARMACY = 'pharmacy';

    /** @var  int */
    private $id;

    /** @var  string */
    private $title;

    /** @var  ShippingContent|null */
    private $content;

    /** @var  int */
    private $sort;

    /** @var  string */
    private $type;

    /** @var  float */
    private $fee;

    /** @var  bool */
    private $isActive;

    /** @var  ShippingPayMethod[] */
    private $pays;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Shipping
     */
    public function setId(int $id): Shipping
    {
        $this->id = $id;
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
     * @return Shipping
     */
    public function setTitle(string $title): Shipping
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return null|ShippingContent
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param null|ShippingContent $content
     * @return Shipping
     */
    public function setContent($content)
    {
        $this->content = $content;
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
     * @return Shipping
     */
    public function setSort(int $sort): Shipping
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Shipping
     */
    public function setType(string $type): Shipping
    {
        $this->type = $type;
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
     * @return Shipping
     */
    public function setFee(float $fee): Shipping
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     * @return Shipping
     */
    public function setIsActive(bool $isActive): Shipping
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return ShippingPayMethod[]
     */
    public function getPays(): array
    {
        return $this->pays;
    }

    /**
     * @param ShippingPayMethod[] $pays
     * @return Shipping
     */
    public function setPays(array $pays): Shipping
    {
        $this->pays = $pays;
        return $this;
    }

    /**
     * @param $payId
     * @return null|ShippingPayMethod
     */
    public function payShippingMethod($payId): ?ShippingPayMethod
    {
        /** @var ShippingPayMethod $pay */
        foreach ($this->getPays() ?? [] as $pay) {
            if ($payId == $pay->getId()) {
                return $pay;
            }
        }

        return null;
    }
}
