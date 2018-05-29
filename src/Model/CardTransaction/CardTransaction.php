<?php

namespace Pilulka\CoreApiClient\Model\CardTransaction;

/**
 * Class CardTransaction
 * @package Pilulka\CoreApiClient\Model\CardTransaction
 */
class CardTransaction
{
    /** @var int */
    private $id;
    /** @var int */
    private $userId;
    /** @var \DateTime */
    private $time;
    /** @var float */
    private $credits;
    /** @var ?string */
    private $orderNumber;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CardTransaction
     */
    public function setId(int $id): CardTransaction
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return CardTransaction
     */
    public function setUserId(int $userId): CardTransaction
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     * @return CardTransaction
     */
    public function setTime(\DateTime $time): CardTransaction
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return float
     */
    public function getCredits(): float
    {
        return $this->credits;
    }

    /**
     * @param float $credits
     * @return CardTransaction
     */
    public function setCredits(float $credits): CardTransaction
    {
        $this->credits = $credits;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * @param string|null $orderNumber
     * @return CardTransaction
     */
    public function setOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
}
