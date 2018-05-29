<?php

namespace Pilulka\CoreApiClient\Model\Pharmacy;

class Pharmacy
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  null|string */
    private $type;

    /** @var PharmacyLocation */
    private $location;

    /** @var PharmacyContact */
    private $contact;

    /** @var PharmacyOpeningTime */
    private $openingTime;

    /** @var float|null */
    private $distance;

    /** @var string */
    private $region;

    /** @var bool */
    private $isActive;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Pharmacy
     */
    public function setId(int $id): Pharmacy
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
     * @return Pharmacy
     */
    public function setName(string $name): Pharmacy
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return PharmacyLocation
     */
    public function getLocation(): PharmacyLocation
    {
        return $this->location;
    }

    /**
     * @param PharmacyLocation $location
     * @return $this
     */
    public function setLocation(PharmacyLocation $location)
    {
        $this->location = $location;
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
     * @return $this
     */
    public function setDistance(?float $distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * @return PharmacyContact
     */
    public function getContact(): PharmacyContact
    {
        return $this->contact;
    }

    /**
     * @param PharmacyContact $contact
     * @return Pharmacy
     */
    public function setContact(PharmacyContact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return PharmacyOpeningTime
     */
    public function getOpeningTime(): PharmacyOpeningTime
    {
        return $this->openingTime;
    }

    /**
     * @param PharmacyOpeningTime $openingTime
     * @return Pharmacy
     */
    public function setOpeningTime(PharmacyOpeningTime $openingTime)
    {
        $this->openingTime = $openingTime;
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
     * @return Pharmacy
     */
    public function setType(string $type)
    {
        $this->type = $type;
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
     * @return Pharmacy
     */
    public function setRegion(string $region)
    {
        $this->region = $region;
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
     * @return Pharmacy
     */
    public function setIsActive(bool $isActive): Pharmacy
    {
        $this->isActive = $isActive;
        return $this;
    }
}