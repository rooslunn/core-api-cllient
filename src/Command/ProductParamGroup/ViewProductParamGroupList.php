<?php

namespace Pilulka\CoreApiClient\Command\ProductParamGroup;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductParamGroupList implements Request
{
    private const URI = '/productparamgroup';


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
        return self::URI;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}
