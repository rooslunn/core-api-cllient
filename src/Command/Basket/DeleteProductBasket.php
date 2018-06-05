<?php

namespace Pilulka\CoreApiClient\Command\Basket;

use Pilulka\CoreApiClient\Model\Basket\Basket;
use Pilulka\CoreApiClient\Request\{Http, Request};

class DeleteProductBasket implements Request
{
    private const URI = '/basket/%s/%s';

    /** @var string */
    private $uid;

    /** @var int */
    private $productId;

    public function __construct(string $uid, int $productId)
    {
        $this->productId = $productId;
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
        return sprintf(self::URI, $this->uid, $this->productId);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}