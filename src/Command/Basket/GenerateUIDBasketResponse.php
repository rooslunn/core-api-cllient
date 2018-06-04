<?php

namespace Pilulka\CoreApiClient\Command\Basket;

use Pilulka\CoreApiClient\Response\Response;

class GenerateUIDBasketResponse implements Response
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
        return \is_object($this->objectResult->BasketUID);
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