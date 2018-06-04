<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class SearchProduct implements Request
{
    private const URI = '/product/search?query=';

    /** @var string */
    private $query;

    public function __construct(string $query)
    {
        $this->query = $query;
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
        return self::URI . $this->query;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}