<?php

namespace Pilulka\CoreApiClient\Command\Basket;

use Pilulka\CoreApiClient\JsonArtisan;
use Pilulka\CoreApiClient\Model\Basket\BasketUser;
use Pilulka\CoreApiClient\Response\Response;

class ViewUserBasketResponse implements Response
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
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $result = JsonArtisan::jsonMap([$this->objectResult], BasketUser::class)[0];
        return $result;
    }
}