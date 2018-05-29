<?php

namespace Pilulka\CoreApiClient\Model\Product;

/**
 * Class ProductListQuery
 * @package Pilulka\CoreApi\Domain\Model\Product
 */
class ProductListQuery
{
    const SORT_METHOD_POPULAR = 1;
    const SORT_METHOD_LOW_COST = 2;
    const SORT_METHOD_HIGH_COST = 3;
    const SORT_METHOD_ABC = 4;

    /** @var array */
    private $categories = [];

    /** @var array */
    private $brands = [];

    /** @var array */
    private $params = [];

    /** @var array */
    private $suppliers = [];

    /** @var array */
    private $productLines = [];

    /** @var int */
    private $sort = self::SORT_METHOD_POPULAR;

    /** @var int|null  */
    private $from = null;

    /** @var int|null  */
    private $size = null;

    /** @var int|null  */
    private $priceFrom = null;

    /** @var int|null  */
    private $priceTo = null;

    /** @var string */
    private $query = '';

    /** @var bool */
    private $inStockOnly = false;

    /** @var bool */
    private $secondQuality = false;

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param array $categories
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;
    }

    /**
     * @return array
     */
    public function getBrands(): array
    {
        return $this->brands;
    }

    /**
     * @param array $brands
     */
    public function setBrands(array $brands)
    {
        $this->brands = $brands;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param array $params
     */
    public function setParams(array $params)
    {
        $this->params = $params;
    }

    /**
     * @return array
     */
    public function getSuppliers(): array
    {
        return $this->suppliers;
    }

    /**
     * @param array $suppliers
     */
    public function setSuppliers(array $suppliers)
    {
        $this->suppliers = $suppliers;
    }

    /**
     * @return array
     */
    public function getProductLines(): array
    {
        return $this->productLines;
    }

    /**
     * @param array $productLines
     */
    public function setProductLines(array $productLines)
    {
        $this->productLines = $productLines;
    }

    /**
     * @return int
     */
    public function getSort(): int
    {
        return $this->sort;
    }

    /**
     * @param int $sort
     */
    public function setSort(int $sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return int|null
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param int|null $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int|null $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return int|null
     */
    public function getPriceFrom()
    {
        return $this->priceFrom;
    }

    /**
     * @param int|null $priceFrom
     */
    public function setPriceFrom($priceFrom)
    {
        $this->priceFrom = $priceFrom;
    }

    /**
     * @return int|null
     */
    public function getPriceTo()
    {
        return $this->priceTo;
    }

    /**
     * @param int|null $priceTo
     */
    public function setPriceTo($priceTo)
    {
        $this->priceTo = $priceTo;
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @param string $query
     */
    public function setQuery(string $query)
    {
        $this->query = $query;
    }

    /**
     * @return boolean
     */
    public function getInStockOnly(): bool
    {
        return $this->inStockOnly;
    }

    /**
     * @param boolean $inStockOnly
     */
    public function setInStockOnly(bool $inStockOnly)
    {
        $this->inStockOnly = $inStockOnly;
    }

    /**
     * @return boolean
     */
    public function getSecondQuality(): bool
    {
        return $this->secondQuality;
    }

    /**
     * @param boolean $secondQuality
     */
    public function setSecondQuality(bool $secondQuality)
    {
        $this->secondQuality = $secondQuality;
    }
}
