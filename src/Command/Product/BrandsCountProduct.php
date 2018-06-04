<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Request\{Http, Request};

class BrandsCountProduct implements Request
{
    private const URI = '/product/brandcount';

    /** @var array */
    private $params;

    public function __construct(array $params)
    {
        $this->params = $params;
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
        $uri = self::URI . '?' . http_build_query($this->params);
        return $uri;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}