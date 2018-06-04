<?php

namespace Pilulka\CoreApiClient\Command\Product;

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
        $products = [];
        $mapper = new \JsonMapper();

        foreach ($this->objectResult->products as $item) {
            $products[] = $mapper->map($item, new Product);
        }

        $result = (object) $this->objectResult;
        $result->result = $this->result();
        $result->products = $products;

        return $result;
    }
}