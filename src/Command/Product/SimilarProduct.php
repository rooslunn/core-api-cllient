<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Request\{Http, Request};

class SimilarProduct implements Request
{
    private const URI = '/product/similarproducts?';

    /** @var int */
    private $id;

    /** @var array */
    private $categoryIds;

    /** @var int */
    private $size;

    public function __construct(int $id, array $categoryIds, int $size)
    {
        $this->id = $id;
        $this->categoryIds = $categoryIds;
        $this->size = $size;
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
        return self::URI .
            http_build_query([
                'id' => $this->id,
                'categoryId' => $this->categoryIds,
                'size' => $this->size,
            ]);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}