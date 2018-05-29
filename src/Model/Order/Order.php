<?php

namespace Pilulka\CoreApiClient\Model\Order;


use Pilulka\CoreApiClient\Model\JsonModel;

class Order extends JsonModel
{
    const STATUS_FAILED = 91; // Chybná

	/**
	 * Bezne stavy
	 * Setuje se v css order-state.scss
	 * 1, 3, 5 = Prvni krok
	 * 4, 6, 7, 2008, 8, 9, 208 = Druhy krok
	 * 10 =  Treti krok (sucess)
	 *
	 */
    const STATUS_NEW = 1; // Nová
    const STATUS_ENTERED = 3; // Zadano
    const STATUS_CONFIRMED = 4; // Potvrzeno
    const STATUS_ORDERED = 5; // Objednano - predano lekarne
    const STATUS_AVAILABLE = 6; // Pripraveno na skladu
    const STATUS_INVOICED = 7; // Vyfakturovaná
    const STATUS_READY_FOR_DISPATCH = 2008; // Připravená k expedici
    const STATUS_READY_FOR_PICKUP = 8; // Připraveno k vyzvednutí
    const STATUS_TRANS_DELIVERY = 9; // Předaná dopravci
    const STATUS_EXECUTED = 10; // Dokončená
    const STATUS_DISPATCHED_ERROR = 109; // Odesláno zákazníkovi, ale nastala chyba v systému
    const STATUS_PARTLY_READY_FOR_DISPATCH = 208; // Částečně připraveno k expedici

    // storno stavy / v css v CSS nasetovan obrazek, ktery je cely cerveny
    const STATUS_CANCEL_CUSTOMER = 20; // Storno zakaznikem
    const STATUS_CANCEL_ADMIN = 21; // Storno administrativnim pracovnikem
    const STATUS_CANCEL_DELIVERY = 22; // Vraceno dopravcem
    const STATUS_CANCEL_REFUNDED = 23; // Vráceny peníze
    const STATUS_CANCEL_NOTPAYED = 24; // nezaplaceno
    const STATUS_CANCEL_PARTNER = 25; // Stornováno partnerem
    const STATUS_CANCEL_INTERNAL = 26; // Stornováno - interní
    const STATUS_CANCEL_NOTPICKED = 101; // nevyzvednuto
    const STATUS_CANCEL_NOTPICKED_NO_NOTIFY = 1001; // nevyzvednuto, neodesilat notifikaci zakaznikovi

    public static $allStatuses = array( // seznam vsech statusu
        self::STATUS_FAILED,
        self::STATUS_NEW,
        self::STATUS_ENTERED,
        self::STATUS_CONFIRMED,
        self::STATUS_ORDERED,
        self::STATUS_AVAILABLE,
        self::STATUS_INVOICED,
        self::STATUS_READY_FOR_DISPATCH,
        self::STATUS_TRANS_DELIVERY,
        self::STATUS_EXECUTED,
        self::STATUS_CANCEL_CUSTOMER,
        self::STATUS_CANCEL_ADMIN,
        self::STATUS_CANCEL_DELIVERY,
        self::STATUS_CANCEL_REFUNDED,
        self::STATUS_CANCEL_NOTPAYED,
        self::STATUS_CANCEL_PARTNER,
        self::STATUS_CANCEL_INTERNAL,
        self::STATUS_CANCEL_NOTPICKED,
        self::STATUS_CANCEL_NOTPICKED_NO_NOTIFY,
        self::STATUS_PARTLY_READY_FOR_DISPATCH,
        self::STATUS_READY_FOR_PICKUP,
        self::STATUS_DISPATCHED_ERROR,
    );


    public static $statusesCancel = array( // stornovana / zrusena
        self::STATUS_CANCEL_CUSTOMER,
        self::STATUS_CANCEL_ADMIN,
        self::STATUS_CANCEL_DELIVERY,
        self::STATUS_CANCEL_REFUNDED,
        self::STATUS_CANCEL_NOTPAYED,
        self::STATUS_CANCEL_PARTNER,
        self::STATUS_CANCEL_NOTPICKED,
    );

    public static $statusesCompleted = array( // dokoncena nebo zrusena
        self::STATUS_EXECUTED,
        self::STATUS_CANCEL_CUSTOMER,
        self::STATUS_CANCEL_ADMIN,
        self::STATUS_CANCEL_DELIVERY,
        self::STATUS_CANCEL_REFUNDED,
        self::STATUS_CANCEL_NOTPAYED,
        self::STATUS_CANCEL_PARTNER,
        self::STATUS_CANCEL_INTERNAL,
        self::STATUS_CANCEL_NOTPICKED,
        self::STATUS_CANCEL_NOTPICKED_NO_NOTIFY,
        self::STATUS_DISPATCHED_ERROR,
    );

    /** @var  int */
    private $id;

    /** @var string */
    private $orderNo;

    /** @var int|null */
    private $userId;

    /** @var int */
    private $status;

    /** @var bool */
    private $isPaid;

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var string */
    private $email;

    /** @var string */
    private $phone;

    /** @var string|null */
    private $company;

    /** @var string|null */
    private $ico;

    /** @var string|null */
    private $dic;

    /** @var string */
    private $street;

    /** @var string */
    private $city;

    /** @var string */
    private $zip;

    /** @var string|null */
    private $delFirstName;

    /** @var string|null */
    private $delLastName;

    /** @var string|null */
    private $delPhone;

    /** @var string|null */
    private $delCompany;

    /** @var string|null */
    private $delStreet;

    /** @var string|null */
    private $delCity;

    /** @var string|null */
    private $delZip;

    /** @var string|null */
    private $note;

    /** @var string */
    private $noteAdmin;

    /** @var \DateTime */
    private $createdAt;

    /** @var int */
    private $createdBy;

    /** @var \DateTime */
    private $updatedAt;

    /** @var int */
    private $updatedBy;

    /** @var int */
    private $warehouseId;

    /** @var float */
    private $price;
}
