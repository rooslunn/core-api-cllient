<?php

namespace Pilulka\CoreApiClient\Command\ProductFavorite;

use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateProductFavorite implements Request
{
    private const URI = '/favorite';

    /**
     * @var ProductFavorite[]
     */
    private $productFavorites;

    /**
     * CreateProductFavorite constructor.
     * @param ProductFavorite[] $productFavorites
     */
    public function __construct(array $productFavorites)
    {
        $this->productFavorites = $productFavorites;
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
        return \GuzzleHttp\json_encode($this->productFavorites);
    }
}
