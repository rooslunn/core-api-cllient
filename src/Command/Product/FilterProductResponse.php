<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\JsonArtisan;
use Pilulka\CoreApiClient\Model\Brand\Brand;
use Pilulka\CoreApiClient\Model\Category\Category;
use Pilulka\CoreApiClient\Model\Manufacturer\Manufacturer;
use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Response\Response;

class FilterProductResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    public function __construct($arrayResult)
    {
        $this->objectResult = $arrayResult;
    }

    public function result(): bool
    {
        return \is_object($this->objectResult);
    }

    /**
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $result = (object) $this->objectResult;
        $result->result = $this->result();

        $result->product = JsonArtisan::jsonMap($result->product, Product::class);
        $result->brand = JsonArtisan::jsonMap($result->brand, Brand::class);
        $result->category = JsonArtisan::jsonMap($result->category, Category::class);
        $result->manufacturer = JsonArtisan::jsonMap($result->manufacturer, Manufacturer::class);

        return $result;
    }
}