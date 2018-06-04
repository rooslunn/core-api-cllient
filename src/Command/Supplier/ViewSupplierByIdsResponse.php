<?php

namespace Pilulka\CoreApiClient\Command\Supplier;

use Pilulka\CoreApiClient\Model\ProductParam\ProductParam;
use Pilulka\CoreApiClient\Model\Supplier\Supplier;
use Pilulka\CoreApiClient\Response\Response;

class ViewSupplierByIdsResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * ViewSupplierByIdsResponse constructor.
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
        return is_iterable($this->objectResult->total);
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
            $result[] = $mapper->map($item, new Supplier());
        }

        return $result;
    }
}
