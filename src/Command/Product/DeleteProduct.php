<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class DeleteProduct implements Request
{
    private const URI = '/product';

    /** @var Product */
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::DELETE;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URI . '/' . $this->product->getId();
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode($this->product);
    }
}