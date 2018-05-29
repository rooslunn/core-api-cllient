<?php

namespace Pilulka\CoreApiClient\Model\Card;

/**
 * Class Card
 * @package Pilulka\CoreApiClient\Model\Card
 */
class Card
{
    /** @var int */
    private $userId;
    /** @var bool */
    private $isVip;
    /** @var float */
    private $credits;
    /** @var ?array */
    private $cards;

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return Card
     */
    public function setUserId(int $userId): Card
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVip(): bool
    {
        return $this->isVip;
    }

    /**
     * @param bool $isVip
     * @return Card
     */
    public function setIsVip(bool $isVip): Card
    {
        $this->isVip = $isVip;
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
     * @return Card
     */
    public function setCredits(float $credits): Card
    {
        $this->credits = $credits;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param mixed $cards
     * @return Card
     */
    public function setCards($cards)
    {
        $this->cards = $cards;
        return $this;
    }
}
