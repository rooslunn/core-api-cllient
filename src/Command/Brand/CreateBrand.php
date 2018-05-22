<?php


namespace Pilulka\CoreApiClient\Command\Brand;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateBrand implements Request
{
    private const url = '/brand';

    /** @var array */
    private $parameters;

    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
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
        return self::url;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode($this->parameters);
    }
}