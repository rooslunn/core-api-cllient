<?php

namespace Pilulka\CoreApiClient\Command\ProductParamGroup;

use Pilulka\CoreApiClient\Model\ProductLine\ProductLine;
use Pilulka\CoreApiClient\Model\ProductParamGroup\ProductParamGroup;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateProductParamGroup implements Request
{
    private const URI = '/productparamgroup';

    /**
     * @var ProductParamGroup
     */
    private $productParamGroup;

    /**
     * CreateProductParamGroup constructor.
     * @param ProductParamGroup $productParamGroup
     */
    public function __construct(ProductParamGroup $productParamGroup)
    {
        $this->productParamGroup = $productParamGroup;
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
        return \GuzzleHttp\json_encode($this->productParamGroup);
    }
}
