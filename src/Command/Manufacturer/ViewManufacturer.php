<?php

namespace Pilulka\CoreApiClient\Command\Manufacturer;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewManufacturer implements Request
{
    private const uri = '/manufacture';

    /** @var int */
    private $id;

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
        return self::uri . "/{$this->id}";
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}