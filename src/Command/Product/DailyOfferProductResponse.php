<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Response\Response;

class DailyOfferProductResponse implements Response
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
        $result = [];
        $mapper = new \JsonMapper();

        foreach ($this->objectResult->products as $item) {
            $result[] = $mapper->map($item, new Product);
        }

        return $result;
    }
}