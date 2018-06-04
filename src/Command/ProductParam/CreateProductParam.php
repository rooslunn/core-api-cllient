<?php

namespace Pilulka\CoreApiClient\Command\ProductParam;

use Pilulka\CoreApiClient\Model\ProductParam\ProductParam;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateProductParam implements Request
{
    private const URI = '/productparam';

    /**
     * @var ProductParam
     */
    private $productParam;

    /**
     * CreateProductParam constructor.
     * @param ProductParam $productParam
     */
    public function __construct(ProductParam $productParam)
    {
        $this->productParam = $productParam;
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
        return \GuzzleHttp\json_encode($this->productParam);
    }
}
