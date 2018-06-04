<?php

namespace Pilulka\CoreApiClient\Command\Supplier;

use Pilulka\CoreApiClient\Model\Supplier\Supplier;
use Pilulka\CoreApiClient\Response\Response;

class ViewSupplierResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * ViewProductParamsResponse constructor.
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
        $mapper = new \JsonMapper();
        return $mapper->map($this->objectResult, new Supplier());
    }
}
