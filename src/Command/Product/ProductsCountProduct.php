<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Request\{Http, Request};

class ProductsCountProduct implements Request
{
    private const URI = '/product/count?';

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
        return self::URI . http_build_query($this->params);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}