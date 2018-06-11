<?php

namespace Pilulka\CoreApiClient\Command\ProductFavorite;

use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class DeleteProductFavorite implements Request
{
    private const URI = '/favorite';

    /**
     * @var ProductFavorite
     */
    private $productFavorite;

    /**
     * CreateProductFavorite constructor.
     * @param ProductFavorite $productFavorite
     */
    public function __construct(ProductFavorite $productFavorite)
    {
        $this->productFavorite = $productFavorite;
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
        return self::URI;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode([
            'userId' => $this->productFavorite->getUserId(),
            'productId' => $this->productFavorite->getProductId(),
        ]);
    }
}
