<?php

namespace Pilulka\CoreApiClient\Command\Manufacturer;

use Pilulka\CoreApiClient\Model\Manufacturer\Manufacturer;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateManufacturer implements Request
{
    private const uri = '/manufacture';

    /** @var Manufacturer */
    private $manufacturer;

    public function __construct(Manufacturer $manufacturer)
    {
        $this->manufacturer = $manufacturer;
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
        return self::uri;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode([
            'id' => $this->manufacturer->getId(),
            'name' => $this->manufacturer->getName(),
            'content' => $this->manufacturer->getContent(),
        ]);
    }
}