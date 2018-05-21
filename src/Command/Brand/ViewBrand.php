<?php

namespace Pilulka\CoreApiClient\Command\Brand;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewBrand implements Request
{
    private const url = '/brand';

    /** @var array */
    private $parameter;

    /**
     * GetBrand constructor.
     * @param array $parameter
     */
    public function __construct(array $parameter)
    {
        $this->parameter = $parameter;
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
        return Http::URL_BASE.self::url.'/'.$this->parameter['id'];
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return [];
    }
}