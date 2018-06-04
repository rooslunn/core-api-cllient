<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Response\Response;

class BrandsCountProductResponse implements Response
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
        return is_object($this->objectResult) ?? false;
    }

    /**
     * @return object
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();
        return $result;
    }
}