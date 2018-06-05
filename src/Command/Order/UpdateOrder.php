<?php

namespace Pilulka\CoreApiClient\Command\Order;

use Pilulka\CoreApiClient\Model\Order\Order;
use Pilulka\CoreApiClient\Request\{Http, Request};

class UpdateOrder implements Request
{
    private const URI = '/order';

    /** @var Order */
    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
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
        return \GuzzleHttp\json_encode($this->order);
    }
}