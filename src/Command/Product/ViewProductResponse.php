<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\JsonArtisan;
use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Response\Response;

class ViewProductResponse implements Response
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
        return $this->objectResult->result ?? false;
    }

    /**
     * @return array|object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $result = JsonArtisan::jsonMapAndTimestamps(
            [$this->objectResult],
            Product::class,
            ['updatedAt']
        );

        return $result;
    }
}
