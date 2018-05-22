<?php


namespace Pilulka\CoreApiClient\Command\Brand;

use Pilulka\CoreApiClient\Model\Brand;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateBrand implements Request
{
    private const url = '/brand';

    /** @var Brand */
    private $brand;

    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
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
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode([
            'id' => $this->brand->id,
            'name' => $this->brand->name,
        ]);
    }
}