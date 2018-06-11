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
        return \GuzzleHttp\json_encode([
            'id' => $this->voucher->getId(),
            'name' => $this->voucher->getName(),
            'code' => $this->voucher->getCode(),
            'voucherType' => $this->voucher->getVoucherType(),
            'limitType' => $this->voucher->getLimitType(),
            'saleType' => $this->voucher->getSaleType(),
            'minOrderAmount' => $this->voucher->getMinOrderAmount(),
            'voucherValue' => $this->voucher->getVoucherValue(),
            'validFrom' => $this->voucher->getValidFrom()->getTimestamp(),
            'validTo' => $this->voucher->getValidTo()->getTimestamp(),
            'validProducts' => $this->voucher->getValidProducts(),
            'validBrands' => $this->voucher->getValidBrands(),
            'validCategories' => $this->voucher->getValidCategories(),
            'validManufacturers' => $this->voucher->getValidManufacturers(),
            'validDeliveryMethods' => $this->voucher->getValidDeliveryMethods()
        ]);
    }
}
