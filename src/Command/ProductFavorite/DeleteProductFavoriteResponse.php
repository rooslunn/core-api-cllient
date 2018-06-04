<?php

namespace Pilulka\CoreApiClient\Command\ProductFavorite;

use Pilulka\CoreApiClient\Response\Response;

class DeleteProductFavoriteResponse implements Response
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
        return $this->objectResult->result ?? false;
    }

    /**
     * @return object
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();
        return $result;
    }
}
