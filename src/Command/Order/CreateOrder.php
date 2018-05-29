<?php

namespace Pilulka\CoreApiClient\Command\Order;

use Pilulka\CoreApiClient\Model\Order\Order;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateOrder implements Request
{
    private const uri = '/order';

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
        return Http::PUT;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::uri;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode($this->order);
    }
}