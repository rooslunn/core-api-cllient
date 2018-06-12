<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\JsonArtisan;
use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Response\Response;

class SimilarProductResponse implements Response
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
        return $this->objectResult->total > 0;
    }

    /**
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();
        $products = JsonArtisan::jsonMapAndTimestamps(
            $this->objectResult->products,
            Product::class,
            ['updatedAt']
        );

        $result->products = $products;

        return $result;
    }
}
