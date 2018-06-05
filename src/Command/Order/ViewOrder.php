<?php

namespace Pilulka\CoreApiClient\Command\Order;

use Pilulka\CoreApiClient\Model\Order\Order;
use Pilulka\CoreApiClient\Request\{Http, Request};

class ViewOrder implements Request
{
    private const URI = '/order/%d';

    /** @var int */
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::GET;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return sprintf(self::URI, $this->id);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}