<?php


namespace Pilulka\CoreApiClient\Model\Basket;


class Basket
{
    /** @var  int */
    private $id;

    /** @var  string|null */
    private $uid;

    /** @var  int|null */
    private $userId;

    /** @var BasketItem[]|null */
    private $baskets;

    /** @var  BasketShipping|null */
    private $shipping;

    /** @var int */
    private $updatedAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Basket
     */
    public function setId(int $id): Basket
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param null|string $uid
     * @return Basket
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     * @return Basket
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return null|BasketItem[]
     */
    public function getBaskets()
    {
        return $this->baskets ? $this->baskets : [];
    }

    /**
     * @param null|BasketItem[] $baskets
     * @return Basket
     */
    public function setBaskets($baskets)
    {
        $this->baskets = $baskets;
        return $this;
    }

    /**
     * @return null|BasketShipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param null|BasketShipping $shipping
     * @return Basket
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * @return int
     */
    public function getUpdatedAt(): int
    {
        return $this->updatedAt;
    }

    /**
     * @param int $updatedAt
     * @return Basket
     */
    public function setUpdatedAt(int $updatedAt): Basket
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }


}