<?php


namespace Pilulka\CoreApiClient\Model\Order;


use Pilulka\CoreApiClient\Model\JsonModel;

class OrderItem extends JsonModel
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

}