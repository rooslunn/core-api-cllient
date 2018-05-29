<?php


namespace Pilulka\CoreApiClient\Model\Order;


class Order
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

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Order
     */
    public function setId(int $id): Order
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     * @return Order
     */
    public function setOrderNo(string $orderNo): Order
    {
        $this->orderNo = $orderNo;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     * @return Order
     */
    public function setUserId($userId): Order
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return Order
     */
    public function setStatus(int $status): Order
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->isPaid;
    }

    /**
     * @param bool $isPaid
     * @return Order
     */
    public function setIsPaid(bool $isPaid): Order
    {
        $this->isPaid = $isPaid;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Order
     */
    public function setFirstName(string $firstName): Order
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Order
     */
    public function setLastName(string $lastName): Order
    {
        $this->lastName = $lastName;
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
     * @return Order
     */
    public function setEmail(string $email): Order
    {
        $this->email = $email;
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
     * @return Order
     */
    public function setPhone(string $phone): Order
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string|null $company
     * @return Order
     */
    public function setCompany(?string $company): Order
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIco(): ?string
    {
        return $this->ico;
    }

    /**
     * @param string|null $ico
     * @return Order
     */
    public function setIco(?string $ico): Order
    {
        $this->ico = $ico;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDic(): ?string
    {
        return $this->dic;
    }

    /**
     * @param string|null $dic
     * @return Order
     */
    public function setDic(?string $dic): Order
    {
        $this->dic = $dic;
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
     * @return Order
     */
    public function setStreet(string $street): Order
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
     * @return Order
     */
    public function setCity(string $city): Order
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return Order
     */
    public function setZip(string $zip): Order
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelFirstName(): ?string
    {
        return $this->delFirstName;
    }

    /**
     * @param string|null $delFirstName
     * @return Order
     */
    public function setDelFirstName(?string $delFirstName): Order
    {
        $this->delFirstName = $delFirstName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelLastName(): ?string
    {
        return $this->delLastName;
    }

    /**
     * @param string|null $delLastName
     * @return Order
     */
    public function setDelLastName(?string $delLastName): Order
    {
        $this->delLastName = $delLastName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelPhone(): ?string
    {
        return $this->delPhone;
    }

    /**
     * @param string|null $delPhone
     * @return Order
     */
    public function setDelPhone(?string $delPhone): Order
    {
        $this->delPhone = $delPhone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelCompany(): ?string
    {
        return $this->delCompany;
    }

    /**
     * @param string|null $delCompany
     * @return Order
     */
    public function setDelCompany(?string $delCompany): Order
    {
        $this->delCompany = $delCompany;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelStreet(): ?string
    {
        return $this->delStreet;
    }

    /**
     * @param string|null $delStreet
     * @return Order
     */
    public function setDelStreet(?string $delStreet): Order
    {
        $this->delStreet = $delStreet;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelCity(): ?string
    {
        return $this->delCity;
    }

    /**
     * @param string|null $delCity
     * @return Order
     */
    public function setDelCity(?string $delCity): Order
    {
        $this->delCity = $delCity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelZip(): ?string
    {
        return $this->delZip;
    }

    /**
     * @param string|null $delZip
     * @return Order
     */
    public function setDelZip(?string $delZip): Order
    {
        $this->delZip = $delZip;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string|null $note
     * @return Order
     */
    public function setNote(?string $note): Order
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNoteAdmin(): ?string
    {
        return $this->noteAdmin;
    }

    /**
     * @param string|null $noteAdmin
     * @return Order
     */
    public function setNoteAdmin(?string $noteAdmin): Order
    {
        $this->noteAdmin = $noteAdmin;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Order
     */
    public function setCreatedAt(\DateTime $createdAt): Order
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedBy(): int
    {
        return $this->createdBy;
    }

    /**
     * @param int $createdBy
     * @return Order
     */
    public function setCreatedBy(int $createdBy): Order
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Order
     */
    public function setUpdatedAt(\DateTime $updatedAt): Order
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getUpdatedBy(): ?int
    {
        return $this->updatedBy;
    }

    /**
     * @param int|null $updatedBy
     * @return Order
     */
    public function setUpdatedBy($updatedBy): Order
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseId(): ?int
    {
        return $this->warehouseId;
    }

    /**
     * @param int|null $warehouseId
     * @return Order
     */
    public function setWarehouseId($warehouseId): Order
    {
        $this->warehouseId = $warehouseId;
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
     * @return Order
     */
    public function setPrice(float $price): Order
    {
        $this->price = $price;
        return $this;
    }

}
