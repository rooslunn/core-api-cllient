<?php

namespace Pilulka\CoreApiClient\Command\Manufacturer;

use JsonMapper;
use Pilulka\CoreApiClient\Model\Manufacturer\Manufacturer;
use Pilulka\CoreApiClient\Response\Response;

class ViewManufacturerResponse implements Response
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
        return $this->objectResult->id ? true : false;
    }

    /**
     * @return object|Manufacturer
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $mapper = new JsonMapper();
        return $mapper->map($this->objectResult, new Manufacturer());
    }
}