<?php

namespace Pilulka\CoreApiClient\Command\Basket;

use Pilulka\CoreApiClient\Request\Basket\BasketKosikRequestParams;
use Pilulka\CoreApiClient\Request\{Http, Request};

class KosikBasket implements Request
{
    private const URI = '/basket';

    /** @var BasketKosikRequestParams */
    private $requestParams;

    public function __construct(BasketKosikRequestParams $requestParams)
    {
        $this->requestParams = $requestParams;
    }
    
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::POST;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URI;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode($this->requestParams);
    }
}