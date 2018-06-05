<?php

namespace Pilulka\CoreApiClient\Command\Voucher;

use Pilulka\CoreApiClient\Model\Voucher\Voucher;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateVoucher implements Request
{
    private const URI = '/voucher';

    /**
     * @var Voucher
     */
    private $voucher;

    /**
     * CreateVoucher constructor.
     * @param Voucher $voucher
     */
    public function __construct(Voucher $voucher)
    {
        $this->voucher = $voucher;
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
        return \GuzzleHttp\json_encode($this->voucher);
    }
}
