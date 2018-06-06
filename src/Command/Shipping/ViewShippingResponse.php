<?php

namespace Pilulka\CoreApiClient\Command\Shipping;

use JsonMapper;
use Pilulka\CoreApiClient\Model\Shipping\Shipping;
use Pilulka\CoreApiClient\Response\Response;

class ViewShippingResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * ViewShippingResponse constructor.
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
        return $this->objectResult->id ? true : false;
    }

    /**
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $mapper = new JsonMapper();
        return $mapper->map($this->objectResult, new Shipping());
    }
}
