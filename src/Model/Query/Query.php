<?php


namespace Pilulka\CoreApiClient\Model\Query;

class Query
{
    /** @var string */
    public $query;

    /**
     * @var array
     */
    public $categoryId;

    /**
     * @var array
     */
    public $brandId;

    /**
     * @var array
     */
    public $productLine;

    /**
     * @var array
     */
    public $paramId;

    /**
     * @var array
     */
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
     * @return array
     */
    public function getCategoryId(): array
    {
        return $this->categoryId;
    }

    /**
     * @param array $categoryId
     * @return Query
     */
    public function setCategoryId(array $categoryId): Query
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return array
     */
    public function getBrandId(): array
    {
        return $this->brandId;
    }

    /**
     * @param array $brandId
     * @return Query
     */
    public function setBrandId(array $brandId): Query
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * @return array
     */
    public function getProductLine(): array
    {
        return $this->productLine;
    }

    /**
     * @param array $productLine
     * @return Query
     */
    public function setProductLine(array $productLine): Query
    {
        $this->productLine = $productLine;
        return $this;
    }

    /**
     * @return array
     */
    public function getParamId(): array
    {
        return $this->paramId;
    }

    /**
     * @param array $paramId
     * @return Query
     */
    public function setParamId(array $paramId): Query
    {
        $this->paramId = $paramId;
        return $this;
    }

    /**
     * @return array
     */
    public function getSupplierId(): array
    {
        return $this->supplierId;
    }

    /**
     * @param array $supplierId
     * @return Query
     */
    public function setSupplierId(array $supplierId): Query
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
