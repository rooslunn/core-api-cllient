<?php

namespace Pilulka\CoreApiClient\Command\ProductParamGroup;

use Pilulka\CoreApiClient\Model\ProductParamGroup\ProductParamGroup;
use Pilulka\CoreApiClient\Response\Response;

class ProductParamGroupListResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * DeleteProductFavoriteResponse constructor.
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

        foreach ($this->objectResult->productParamGroup ?? [] as $paramGroup) {
            $return[$paramGroup->id] = $mapper->map($paramGroup, new ProductParamGroup());
        }

        return $return;
    }
}
