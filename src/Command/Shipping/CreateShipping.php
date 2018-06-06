<?php

namespace Pilulka\CoreApiClient\Command\Shipping;

use Pilulka\CoreApiClient\Model\Shipping\Shipping;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateShipping implements Request
{
    private const URI = '/shipping';

    /**
     * @var Shipping
     */
    private $shipping;

    public function __construct(Shipping $shipping)
    {
        $this->shipping = $shipping;
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
        return \GuzzleHttp\json_encode($this->shipping);
    }
}
