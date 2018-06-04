<?php

namespace Pilulka\CoreApiClient\Command\ProductOffer;

use Pilulka\CoreApiClient\Model\ProductOffer\ProductOffer;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateProductOffer implements Request
{
    private const URI = '/productoffer';

    /**
     * @var ProductOffer
     */
    private $productOffer;

    /**
     * CreateProductOffer constructor.
     * @param ProductOffer $productOffer
     */
    public function __construct(ProductOffer $productOffer)
    {
        $this->productOffer = $productOffer;
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
        return \GuzzleHttp\json_encode($this->productOffer);
    }
}
