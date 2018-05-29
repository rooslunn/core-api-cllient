<?php

namespace Pilulka\CoreApiClient\Command\Comment;

use Pilulka\CoreApiClient\Response\Response;

class ViewRatingCountsResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    public function __construct($arrayResult)
    {
        $this->objectResult = $arrayResult;
    }

    public function result(): bool
    {
        return is_object($this->objectResult);
    }

    /**
     * @return object
     */
    public function toModel()
    {
        return $this->objectResult;
    }
}