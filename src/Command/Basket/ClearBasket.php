<?php

namespace Pilulka\CoreApiClient\Command\Basket;

use Pilulka\CoreApiClient\Model\Basket\Basket;
use Pilulka\CoreApiClient\Request\{Http, Request};

class ClearBasket implements Request
{
    private const URI = '/basket/clear/%s';

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
        return Http::DELETE;
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