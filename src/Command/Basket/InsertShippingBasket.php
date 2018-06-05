<?php

namespace Pilulka\CoreApiClient\Command\Basket;

use Pilulka\CoreApiClient\Model\Basket\Basket;
use Pilulka\CoreApiClient\Request\{Http, Request};

class InsertShippingBasket implements Request
{
    private const URI = '/basket/shipping/%s';

    /** @var string */
    private $uid;

    public function __construct(string $uid)
    {
        $this->uid = $uid;
    }
    
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::PUT;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return \sprintf(self::URI, $this->uid);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}