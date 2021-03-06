<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Model\Query\Query;
use Pilulka\CoreApiClient\Request\{Http, Request};

class FilterProduct implements Request
{
    private const URI = '/product/filter?';

    /** @var Query */
    private $query;

    public function __construct(Query $query)
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
        return self::URI . http_build_query((array) $this->query);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}