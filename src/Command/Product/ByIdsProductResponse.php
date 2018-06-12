<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\JsonArtisan;
use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Response\Response;

class ByIdsProductResponse implements Response
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
        $products = JsonArtisan::jsonMapAndTimestamps(
            $this->objectResult->products,
            Product::class,
            ['updatedAt']
        );

        $result = (object) $this->objectResult;
        $result->result = $this->result();
        $result->products = $products;

        return $result;
    }
}
