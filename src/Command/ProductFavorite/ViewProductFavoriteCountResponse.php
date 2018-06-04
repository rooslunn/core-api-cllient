<?php

namespace Pilulka\CoreApiClient\Command\ProductFavorite;

use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;
use Pilulka\CoreApiClient\Response\Response;

class ViewProductFavoriteCountResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * ViewProductFavoriteCountResponse constructor.
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
        return is_integer($this->objectResult->count);
    }

    /**
     * @return object|\stdClass
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->count = $this->objectResult->count;

        return $result;
    }
}
