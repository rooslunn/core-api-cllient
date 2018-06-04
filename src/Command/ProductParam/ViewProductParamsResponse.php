<?php

namespace Pilulka\CoreApiClient\Command\ProductParam;

use Pilulka\CoreApiClient\Model\ProductParam\ProductParam;
use Pilulka\CoreApiClient\Response\Response;

class ViewProductParamsResponse implements Response
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
        return is_iterable($this->objectResult);
    }

    /**
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $return['total'] = $this->objectResult->total;

        $mapper = new \JsonMapper();

        foreach ($this->objectResult->productParam ?? [] as $param) {
            $return['productParam'][$param->id] = $mapper->map($param, new ProductParam());
        }

        return $return;
    }
}
