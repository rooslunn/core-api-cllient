<?php

namespace Pilulka\CoreApiClient\Command\ProductParam;

use Pilulka\CoreApiClient\Response\Response;

class CreateProductParamResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * CreateProductParamResponse constructor.
     * @param $arrayResult
     */
    public function __construct($arrayResult)
    {
        $this->objectResult = $arrayResult;
    }

    /**
     * @return bool
     */
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
        $result->productParam = $this->objectResult->productParam;
        return $result;
    }
}
