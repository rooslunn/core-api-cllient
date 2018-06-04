<?php

namespace Pilulka\CoreApiClient\Command\ProductLine;

use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;
use Pilulka\CoreApiClient\Model\ProductLine\ProductLine;
use Pilulka\CoreApiClient\Response\Response;

class ViewProductLineResponse implements Response
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
        $mapper = new \JsonMapper();
        return $mapper->map($this->objectResult, new ProductLine());
    }
}
