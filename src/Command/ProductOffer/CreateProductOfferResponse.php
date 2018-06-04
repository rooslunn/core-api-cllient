<?php

namespace Pilulka\CoreApiClient\Command\ProductOffer;

use Pilulka\CoreApiClient\Response\Response;

class CreateProductOfferResponse implements Response
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
        return $this->objectResult->result ?? false;
    }

    /**
     * @return object
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();
        $result->productOffer = $this->objectResult->productOffer;
        return $result;
    }
}