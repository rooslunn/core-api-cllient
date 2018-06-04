<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Request\{Http, Request};

class SubcategoryCountsProduct implements Request
{
    private const URI = '/product/subcategorycount?';

    /** @var array */
    private $ids;

    public function __construct(array $ids)
    {
        $this->ids = $ids;
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
                'categoryId' => $this->ids
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