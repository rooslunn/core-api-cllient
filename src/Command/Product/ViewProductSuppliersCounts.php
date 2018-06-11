<?php


namespace Pilulka\CoreApiClient\Command\Product;


use Pilulka\CoreApiClient\Request\http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductSuppliersCounts implements Request
{
    private const URI = '/product/supplierscount?';

    /** @var  array */
    private $categoryIds;

    /** @var  array */
    private $brands;

    /** @var  array */
    private $params;

    /** @var  array */
    private $suppliers;

    /** @var  string */
    private $query;

    /** @var array */
    private $productLines;

    /** @var bool */
    private $inStockOnly;

    /** @var bool */
    private $secondQuality;

    /**
     * ViewProductParamsCounts constructor.
     * @param string $query
     * @param array $categoryIds
     * @param array $brands
     * @param array $productLines
     * @param array $params
     * @param array $suppliers
     * @param bool $inStockOnly
     * @param bool $secondQuality
     */
    public function __construct(
        string $query,
        array $categoryIds,
        array $brands,
        array $productLines,
        array $params,
        array $suppliers,
        bool $inStockOnly,
        bool $secondQuality
    ) {
        $this->categoryIds = $categoryIds;
        $this->brands = $brands;
        $this->params = $params;
        $this->suppliers = $suppliers;
        $this->query = $query;
        $this->productLines = $productLines;
        $this->inStockOnly = $inStockOnly;
        $this->secondQuality = $secondQuality;
    }


    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::GET;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URI . http_build_query([
                'query' => $this->query,
                'categoryId' => $this->categoryIds,
                'brandId' => $this->brands,
                'productLine' => $this->productLines,
                'paramId' => $this->params,
                'supplierId' => $this->suppliers,
                'inStockOnly' => $this->inStockOnly,
                'secondQuality' => $this->secondQuality
            ]);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}