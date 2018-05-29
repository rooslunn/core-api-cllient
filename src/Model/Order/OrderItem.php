<?php


namespace Pilulka\CoreApiClient\Model\Order;


class OrderItem
{
    const TYPE_PRODUCT = 'product'; // Product
    const TYPE_DELIVERY = 'delivery'; // Delivery
    const TYPE_PAYMENT = 'paymethod'; // Payment
    const TYPE_VOUCHER = 'voucher'; //Voucher

    const DELIVERY_PPL = 'DEL_PPL';
    const DELIVERY_ZASILKOVNA = 'DEL_ZASILKOVNA';
    const DELIVERY_CPOST_NP = 'DEL_CPOST_NP';
    const DELIVERY_CPOST_DR = 'DEL_CPOST_DR';
    const DELIVERY_CAR = 'DEL_CAR';
    const DELIVERY_PERSONAL = 'DEL_PERSONAL';

    const DELIVERY_TYPES = [
        self::DELIVERY_PPL,
        self::DELIVERY_ZASILKOVNA,
        self::DELIVERY_CPOST_NP,
        self::DELIVERY_CPOST_DR,
        self::DELIVERY_CAR,
        self::DELIVERY_PERSONAL
    ];

    /** @var int */
    private $id;
    /** @var int */
    private $orderId;
    /** @var int */
    private $itemId;
    /** @var string */
    private $itemType;
    /** @var string */
    private $name;
    /** @var int */
    private $vat;
    /** @var float */
    private $price;
    /** @var float */
    private $priceVat;
    /** @var int */
    private $amount;
    /** @var string */
    private $data;
    /** @var string */
    private $addData;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return OrderItem
     */
    public function setId(int $id): OrderItem
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int|null $orderId
     * @return OrderItem
     */
    public function setOrderId($orderId): OrderItem
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int|null $itemId
     * @return OrderItem
     */
    public function setItemId($itemId): OrderItem
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemType(): string
    {
        return $this->itemType;
    }

    /**
     * @param string $itemType
     * @return OrderItem
     */
    public function setItemType(string $itemType): OrderItem
    {
        $this->itemType = $itemType;
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
     * @return OrderItem
     */
    public function setName(string $name): OrderItem
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVat(): ?int
    {
        return $this->vat;
    }

    /**
     * @param int|null $vat
     * @return OrderItem
     */
    public function setVat($vat): OrderItem
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return OrderItem
     */
    public function setPrice(float $price): OrderItem
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceVat(): float
    {
        return $this->priceVat;
    }

    /**
     * @param float $priceVat
     * @return OrderItem
     */
    public function setPriceVat(float $priceVat): OrderItem
    {
        $this->priceVat = $priceVat;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return OrderItem
     */
    public function setAmount(int $amount): OrderItem
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * @param string|null $data
     * @return OrderItem
     */
    public function setData($data): OrderItem
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddData(): ?string
    {
        return $this->addData;
    }

    /**
     * @param string|null $addData
     * @return OrderItem
     */
    public function setAddData(?string $addData): OrderItem
    {
        $this->addData = $addData;
        return $this;
    }

}