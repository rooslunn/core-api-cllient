<?php


namespace Pilulka\CoreApiClient\Model\Basket;


class BasketItem
{
    /** @var  int */
    private $productId;

    /** @var  int */
    private $amount;

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return BasketItem
     */
    public function setProductId(int $productId): BasketItem
    {
        $this->productId = $productId;
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
     * @return BasketItem
     */
    public function setAmount(int $amount): BasketItem
    {
        $this->amount = $amount;
        return $this;
    }


}