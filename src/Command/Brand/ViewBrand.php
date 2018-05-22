<?php

namespace Pilulka\CoreApiClient\Command\Brand;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewBrand implements Request
{
    private const url = '/brand';

    /** @var array */
    private $id;

    /**
     * GetBrand constructor.
     * @param array $parameter
     */
    public function __construct(int $id)
    {
        $this->id = $id;
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
        return self::url . '/' . $this->id;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return [];
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}