<?php

namespace Pilulka\CoreApiClient\Command\Shipping;

use Pilulka\CoreApiClient\Response\Response;

/**
 * Class CreateShippingResponse
 * @package Pilulka\CoreApiClient\Command\Shipping
 */
class CreateShippingResponse implements Response
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
        $result->shipping = $this->objectResult->shipping;
        return $result;
    }
}
