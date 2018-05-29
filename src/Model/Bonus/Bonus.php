<?php

namespace Pilulka\CoreApiClient\Model\Bonus;

/**
 * Class Bonus
 * @package Pilulka\CoreApiClient\Model\Bonus
 */
class Bonus
{
    /** @var int */
    private $id;
    /** @var int|null */
    private $customerId;
    /** @var string */
    private $name;
    /** @var \DateTime|null */
    private $startsAt;
    /** @var \DateTime|null */
    private $endsAt;
    /** @var string|null */
    private $zips;
    /** @var int */
    private $usageCount;
    /** @var int */
    private $type;
    /** @var bool */
    private $isActive;
    /** @var bool */
    private $isPermanent;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Bonus
     */
    public function setId(int $id): Bonus
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int|null $customerId
     * @return Bonus
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
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
     * @return Bonus
     */
    public function setName(string $name): Bonus
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * @param \DateTime|null $startsAt
     * @return Bonus
     */
    public function setStartsAt($startsAt)
    {
        $this->startsAt = $startsAt;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }

    /**
     * @param \DateTime|null $endsAt
     * @return Bonus
     */
    public function setEndsAt($endsAt)
    {
        $this->endsAt = $endsAt;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getZips()
    {
        return $this->zips;
    }

    /**
     * @param null|string $zips
     * @return Bonus
     */
    public function setZips($zips)
    {
        $this->zips = $zips;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsageCount(): int
    {
        return $this->usageCount;
    }

    /**
     * @param int $usageCount
     * @return Bonus
     */
    public function setUsageCount(int $usageCount): Bonus
    {
        $this->usageCount = $usageCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Bonus
     */
    public function setType(int $type): Bonus
    {
        $this->type = $type;
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
     * @return Bonus
     */
    public function setIsActive(bool $isActive): Bonus
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPermanent(): bool
    {
        return $this->isPermanent;
    }

    /**
     * @param bool $isPermanent
     * @return Bonus
     */
    public function setIsPermanent(bool $isPermanent): Bonus
    {
        $this->isPermanent = $isPermanent;
        return $this;
    }
}
