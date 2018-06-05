<?php

namespace Pilulka\CoreApiClient\Command\Basket;

use Pilulka\CoreApiClient\Model\Query\BasketKosikQuery;
use Pilulka\CoreApiClient\Request\{Http, Request};

class KosikBasket implements Request
{
    private const URI = '/basket';

    /** @var BasketKosikQuery */
    private $kosikQuery;

    public function __construct(BasketKosikQuery $kosikQuery)
    {
        $this->kosikQuery = $kosikQuery;
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
        return \GuzzleHttp\json_encode($this->kosikQuery);
    }
}