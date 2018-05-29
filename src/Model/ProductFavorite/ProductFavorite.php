<?php

namespace Pilulka\CoreApiClient\Model\ProductFavorite;

/**
 * Class ProductFavorite
 * @package Pilulka\CoreApiClient\Model\ProductFavorite
 */
class ProductFavorite
{
    /** @var int */
    private $userId;
    /** @var int */
    private $productId;

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return ProductFavorite
     */
    public function setUserId(int $userId): ProductFavorite
    {
        $this->userId = $userId;
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
     * @return ProductFavorite
     */
    public function setProductId(int $productId): ProductFavorite
    {
        $this->productId = $productId;
        return $this;
    }
}
