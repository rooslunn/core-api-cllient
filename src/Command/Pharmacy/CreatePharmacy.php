<?php

namespace Pilulka\CoreApiClient\Command\Pharmacy;

use Pilulka\CoreApiClient\Model\Pharmacy\Pharmacy;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreatePharmacy implements Request
{
    private const uri = '/pharmacy';

    /** @var Pharmacy */
    private $pharmacy;

    public function __construct(Pharmacy $pharmacy)
    {
        $this->pharmacy = $pharmacy;
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
        return \GuzzleHttp\json_encode($this->pharmacy);
    }
}