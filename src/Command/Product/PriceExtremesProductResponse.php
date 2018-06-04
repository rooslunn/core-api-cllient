<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Response\Response;

class PriceExtremesProductResponse implements Response
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
        return is_int($this->objectResult->min) && is_int($this->objectResult->max);
    }

    /**
     * @return object
     */
    public function toModel()
    {
        $result = (object) $this->objectResult;
        $result->result = $this->result();
        return $result;
    }
}