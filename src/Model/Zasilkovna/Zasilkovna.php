<?php


namespace Pilulka\CoreApiClient\Model\Zasilkovna;


use Pilulka\CoreApiClient\Model\Location\Location;

class Zasilkovna
{
    /** @var int */
    private $id;
    /** @var string */
    private $name;
    /** @var string */
    private $nameStreet;
    /** @var string */
    private $place;
    /** @var string */
    private $street;
    /** @var string */
    private $city;
    /** @var string */
    private $zip;
    /** @var string */
    private $country;
    /** @var string */
    private $currency;
    /** @var bool */
    private $wheelchairAccessible;
    /** @var Location */
    private $location;
    /** @var string */
    private $url;
    /** @var int */
    private $dressingRoom;
    /** @var int */
    private $claimAssistant;
    /** @var int */
    private $packetConsignment;
    /** @var float */
    private $maxWeight;
    /** @var ZasilkovnaPhoto[] */
    private $photos;
    /** @var ZasilkovnaOpeningHours */
    private $openingHours;
    /** @var string|null */
    private $directions;
    /** @var string|null */
    private $directionsPublic;
    /** @var string|null */
    private $special;
    /** @var string|null */
    private $directionsCar;
    /** @var string|null */
    private $holidayStart;
    /** @var string|null */
    private $holidayEnd;
    /** @var string|null */
    private $noticeMessage;
    /** @var string|null */
    private $openSince;
    /** @var \DateTime */
    private $updatedAt;
    /** @var \DateTime */
    private $createdAt;
    /** @var float|null */
    private $distance;
    /** @var string */
    private $region;
    /** @var ZasilkovnaOpeningTime */
    private $openingTime;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Zasilkovna
     */
    public function setId(int $id): Zasilkovna
    {
        $this->id = $id;
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
     * @return Zasilkovna
     */
    public function setName(string $name): Zasilkovna
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameStreet(): string
    {
        return $this->nameStreet;
    }

    /**
     * @param string $nameStreet
     * @return Zasilkovna
     */
    public function setNameStreet(string $nameStreet): Zasilkovna
    {
        $this->nameStreet = $nameStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlace(): string
    {
        return $this->place;
    }

    /**
     * @param string $place
     * @return Zasilkovna
     */
    public function setPlace(string $place): Zasilkovna
    {
        $this->place = $place;
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
     * @return Zasilkovna
     */
    public function setStreet(string $street): Zasilkovna
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
     * @return Zasilkovna
     */
    public function setCity(string $city): Zasilkovna
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
     * @return Zasilkovna
     */
    public function setZip(string $zip): Zasilkovna
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Zasilkovna
     */
    public function setCountry(string $country): Zasilkovna
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Zasilkovna
     */
    public function setCurrency(string $currency): Zasilkovna
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isWheelchairAccessible(): ?bool
    {
        return $this->wheelchairAccessible;
    }

    /**
     * @param bool $wheelchairAccessible
     * @return Zasilkovna
     */
    public function setIsWheelchairAccessible(?bool $wheelchairAccessible): Zasilkovna
    {
        $this->wheelchairAccessible = $wheelchairAccessible;
        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     * @return Zasilkovna
     */
    public function setLocation(Location $location): Zasilkovna
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Zasilkovna
     */
    public function setUrl(string $url): Zasilkovna
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return int
     */
    public function getDressingRoom(): int
    {
        return $this->dressingRoom;
    }

    /**
     * @param int $dressingRoom
     * @return Zasilkovna
     */
    public function setDressingRoom(int $dressingRoom): Zasilkovna
    {
        $this->dressingRoom = $dressingRoom;
        return $this;
    }

    /**
     * @return int
     */
    public function getClaimAssistant(): int
    {
        return $this->claimAssistant;
    }

    /**
     * @param int $claimAssistant
     * @return Zasilkovna
     */
    public function setClaimAssistant(int $claimAssistant): Zasilkovna
    {
        $this->claimAssistant = $claimAssistant;
        return $this;
    }

    /**
     * @return int
     */
    public function getPacketConsignment(): int
    {
        return $this->packetConsignment;
    }

    /**
     * @param int $packetConsignment
     * @return Zasilkovna
     */
    public function setPacketConsignment(int $packetConsignment): Zasilkovna
    {
        $this->packetConsignment = $packetConsignment;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxWeight(): float
    {
        return $this->maxWeight;
    }

    /**
     * @param float $maxWeight
     * @return Zasilkovna
     */
    public function setMaxWeight(float $maxWeight): Zasilkovna
    {
        $this->maxWeight = $maxWeight;
        return $this;
    }

    /**
     * @return ZasilkovnaPhoto[]
     */
    public function getPhotos(): array
    {
        return $this->photos ?? [];
    }

    /**
     * @param ZasilkovnaPhoto[] $photos
     * @return Zasilkovna
     */
    public function setPhotos(array $photos): Zasilkovna
    {
        $this->photos = $photos;
        return $this;
    }

    /**
     * @return ZasilkovnaOpeningHours
     */
    public function getOpeningHours(): ZasilkovnaOpeningHours
    {
        return $this->openingHours;
    }

    /**
     * @param ZasilkovnaOpeningHours $openingHours
     * @return Zasilkovna
     */
    public function setOpeningHours(ZasilkovnaOpeningHours $openingHours): Zasilkovna
    {
        $this->openingHours = $openingHours;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDirections(): ?string
    {
        return $this->directions;
    }

    /**
     * @param string|null $directions
     * @return Zasilkovna
     */
    public function setDirections(?string $directions): Zasilkovna
    {
        $this->directions = $directions;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDirectionsPublic(): ?string
    {
        return $this->directionsPublic;
    }

    /**
     * @param string|null $directionsPublic
     * @return Zasilkovna
     */
    public function setDirectionsPublic(?string $directionsPublic): Zasilkovna
    {
        $this->directionsPublic = $directionsPublic;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecial(): ?string
    {
        return $this->special;
    }

    /**
     * @param string|null $special
     * @return Zasilkovna
     */
    public function setSpecial(?string $special): Zasilkovna
    {
        $this->special = $special;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDirectionsCar(): ?string
    {
        return $this->directionsCar;
    }

    /**
     * @param string|null $directionsCar
     * @return Zasilkovna
     */
    public function setDirectionsCar(?string $directionsCar): Zasilkovna
    {
        $this->directionsCar = $directionsCar;
        return $this;
    }

    /**
     * @return string
     */
    public function getHolidayStart(): ?string
    {
        return $this->holidayStart;
    }

    /**
     * @param string|null $holidayStart
     * @return Zasilkovna
     */
    public function setHolidayStart(?string $holidayStart): Zasilkovna
    {
        $this->holidayStart = $holidayStart;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolidayEnd(): ?string
    {
        return $this->holidayEnd;
    }

    /**
     * @param string|null $holidayEnd
     * @return Zasilkovna
     */
    public function setHolidayEnd(?string $holidayEnd): Zasilkovna
    {
        $this->holidayEnd = $holidayEnd;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNoticeMessage(): ?string
    {
        return $this->noticeMessage;
    }

    /**
     * @param string|null $noticeMessage
     * @return Zasilkovna
     */
    public function setNoticeMessage(?string $noticeMessage): Zasilkovna
    {
        $this->noticeMessage = $noticeMessage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOpenSince(): ?string
    {
        return $this->openSince;
    }

    /**
     * @param string|null $openSince
     * @return Zasilkovna
     */
    public function setOpenSince(?string $openSince): Zasilkovna
    {
        $this->openSince = $openSince;
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
     * @return Zasilkovna
     */
    public function setUpdatedAt(\DateTime $updatedAt): Zasilkovna
    {
        $this->updatedAt = $updatedAt;
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
     * @return Zasilkovna
     */
    public function setCreatedAt(\DateTime $createdAt): Zasilkovna
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDistance(): ?float
    {
        return $this->distance;
    }

    /**
     * @param float|null $distance
     * @return Zasilkovna
     */
    public function setDistance(?float $distance): Zasilkovna
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return Zasilkovna
     */
    public function setRegion(string $region): Zasilkovna
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return ZasilkovnaOpeningTime
     */
    public function getOpeningTime(): ?ZasilkovnaOpeningTime
    {
        return $this->openingTime;
    }

    /**
     * @param ZasilkovnaOpeningTime $openingTime
     * @return Zasilkovna
     */
    public function setOpeningTime(?ZasilkovnaOpeningTime $openingTime): Zasilkovna
    {
        $this->openingTime = $openingTime;
        return $this;
    }
}