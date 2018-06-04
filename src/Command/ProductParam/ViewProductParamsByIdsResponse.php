<?php

namespace Pilulka\CoreApiClient\Command\ProductParam;

use Pilulka\CoreApiClient\Model\ProductParam\ProductParam;
use Pilulka\CoreApiClient\Response\Response;

class ViewProductParamsByIdsResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * ViewProductParamsByIdsResponse constructor.
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
     * @return array|object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $result = [];
        $mapper = new \JsonMapper();

        foreach ($this->objectResult as $item) {
            $result[] = $mapper->map($item, new ProductParam());
        }

        return $result;
    }
}
