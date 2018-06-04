<?php

namespace Pilulka\CoreApiClient\Command\ProductFavorite;

use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;
use Pilulka\CoreApiClient\Response\Response;

class ViewProductFavoriteListResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * ViewProductFavoriteListResponse constructor.
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
            $result[] = $mapper->map($item, new ProductFavorite());
        }

        return $result;
    }
}
