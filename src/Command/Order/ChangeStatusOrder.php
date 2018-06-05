<?php

namespace Pilulka\CoreApiClient\Command\Order;

use Pilulka\CoreApiClient\Request\{Http, Request};

class ChangeStatusOrder implements Request
{
    private const URI = '/order/status';

    /** @var string */
    private $orderNum;

    /** @var int */
    private $status;

    public function __construct(string $orderNum, int $status)
    {
        $this->orderNum = $orderNum;
        $this->status = $status;
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
        return \GuzzleHttp\json_encode([
            'orderNum' => $this->orderNum,
            'status' => $this->status,
        ]);
    }
}