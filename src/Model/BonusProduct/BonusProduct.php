<?php

namespace Pilulka\CoreApiClient\Model\BonusProduct;

/**
 * Class BonusProduct
 * @package Pilulka\CoreApiClient\Model\BonusProduct
 */
class BonusProduct
{
    /** @var int */
    private $id;
    /** @var int */
    private $bonus_id;
    /** @var int|null */
    private $product_id;
    /** @var string|null */
    private $note;
    /** @var int */
    private $type;
    /** @var int|null */
    private $amount;
    /** @var int|null */
    private $actionBoughtQuantity;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BonusProduct
     */
    public function setId(int $id): BonusProduct
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getBonusId(): int
    {
        return $this->bonus_id;
    }

    /**
     * @param int $bonus_id
     * @return BonusProduct
     */
    public function setBonusId(int $bonus_id): BonusProduct
    {
        $this->bonus_id = $bonus_id;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param int|null $product_id
     * @return BonusProduct
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param null|string $note
     * @return BonusProduct
     */
    public function setNote($note)
    {
        $this->note = $note;
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
     * @return BonusProduct
     */
    public function setType(int $type): BonusProduct
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int|null $amount
     * @return BonusProduct
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getActionBoughtQuantity()
    {
        return $this->actionBoughtQuantity;
    }

    /**
     * @param int|null $actionBoughtQuantity
     * @return BonusProduct
     */
    public function setActionBoughtQuantity($actionBoughtQuantity)
    {
        $this->actionBoughtQuantity = $actionBoughtQuantity;
        return $this;
    }
}
