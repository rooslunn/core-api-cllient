<?php


namespace Pilulka\CoreApiClient\Model\Query;


class Query
{
    /** @var string */
    public $query;

    /** @var int */
    public $categoryId;

    /** @var int */
    public $brandId;

    /** @var int */
    public $productLine;

    /** @var int */
    public $paramId;

    /** @var int */
    public $supplierId;

    /** @var bool */
    public $inStockOnly;

    /** @var bool */
    public $secondQuality;

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @param string $query
     * @return Query
     */
    public function setQuery(string $query): Query
    {
        $this->query = $query;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return Query
     */
    public function setCategoryId(int $categoryId): Query
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandId(): int
    {
        return $this->brandId;
    }

    /**
     * @param int $brandId
     * @return Query
     */
    public function setBrandId(int $brandId): Query
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductLine(): int
    {
        return $this->productLine;
    }

    /**
     * @param int $productLine
     * @return Query
     */
    public function setProductLine(int $productLine): Query
    {
        $this->productLine = $productLine;
        return $this;
    }

    /**
     * @return int
     */
    public function getParamId(): int
    {
        return $this->paramId;
    }

    /**
     * @param int $paramId
     * @return Query
     */
    public function setParamId(int $paramId): Query
    {
        $this->paramId = $paramId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSupplierId(): int
    {
        return $this->supplierId;
    }

    /**
     * @param int $supplierId
     * @return Query
     */
    public function setSupplierId(int $supplierId): Query
    {
        $this->supplierId = $supplierId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInStockOnly(): bool
    {
        return $this->inStockOnly;
    }

    /**
     * @param bool $inStockOnly
     * @return Query
     */
    public function setInStockOnly(bool $inStockOnly): Query
    {
        $this->inStockOnly = $inStockOnly;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSecondQuality(): bool
    {
        return $this->secondQuality;
    }

    /**
     * @param bool $secondQuality
     * @return Query
     */
    public function setSecondQuality(bool $secondQuality): Query
    {
        $this->secondQuality = $secondQuality;
        return $this;
    }
}