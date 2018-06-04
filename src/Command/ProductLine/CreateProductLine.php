<?php

namespace Pilulka\CoreApiClient\Command\ProductLine;

use Pilulka\CoreApiClient\Model\ProductLine\ProductLine;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateProductLine implements Request
{
    private const URI = '/productline';

    /**
     * @var ProductLine
     */
    private $productLine;

    /**
     * CreateProductFavorite constructor.
     * @param ProductLine $productLine
     */
    public function __construct(ProductLine $productLine)
    {
        $this->productLine = $productLine;
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
        return self::URI;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode($this->productLine);
    }
}
