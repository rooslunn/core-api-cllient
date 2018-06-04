<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Response\Response;

class LineCountProductResponse implements Response
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
        $result = (object) $this->objectResult;
        $result->result = $this->result();
        return $result;
    }
}