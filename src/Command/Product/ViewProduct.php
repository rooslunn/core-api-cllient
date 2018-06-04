<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProduct implements Request
{
    private const URI = '/product/';

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
        return self::URI . $this->id;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}