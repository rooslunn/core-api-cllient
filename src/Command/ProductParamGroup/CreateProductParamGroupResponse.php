<?php

namespace Pilulka\CoreApiClient\Command\ProductParamGroup;

use Pilulka\CoreApiClient\Response\Response;

class CreateProductParamGroupResponse implements Response
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
     * @return object
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();
        $result->productParamGroup = $this->objectResult->productParamGroup;
        return $result;
    }
}
