<?php

namespace Pilulka\CoreApiClient\Command\Voucher;

use Pilulka\CoreApiClient\Model\Voucher\Voucher;
use Pilulka\CoreApiClient\Response\Response;

class ViewVoucherDiscountResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * CreateVoucherResponse constructor.
     * @param $arrayResult
     */
    public function __construct($arrayResult)
    {
        $this->objectResult = $arrayResult;
    }

    /**
     * @return bool
     */
    public function result(): bool
    {
        return $this->objectResult->result ?? false;
    }

    /**
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $mapper = new \JsonMapper();
        $voucher = $this->objectResult;

        $voucher->validFrom = (new \DateTime())->setTimestamp($voucher->validFrom);
        $voucher->validTo = (new \DateTime())->setTimestamp($voucher->validTo);
        return $mapper->map($voucher, new Voucher());
    }
}
