<?php

namespace Pilulka\CoreApiClient\Model\ProductOffer;

/**
 * Class ProductOffer
 * @package Pilulka\CoreApiClient\Model\ProductOffer
 */
class ProductOffer
{
    /** @var string */
    private $id;
    /** @var int */
    private $productId;
    /** @var \DateTime */
    private $startDate;
    /** @var \DateTime */
    private $stopDate;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ProductOffer
     */
    public function setId($id): ProductOffer
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return ProductOffer
     */
    public function setProductId(int $productId): ProductOffer
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return ProductOffer
     */
    public function setStartDate(\DateTime $startDate): ProductOffer
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStopDate(): ?\DateTime
    {
        return $this->stopDate;
    }

    /**
     * @param \DateTime $stopDate
     * @return ProductOffer
     */
    public function setStopDate(\DateTime $stopDate): ProductOffer
    {
        $this->stopDate = $stopDate;
        return $this;
    }
}
