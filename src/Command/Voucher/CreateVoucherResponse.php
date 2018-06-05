<?php

namespace Pilulka\CoreApiClient\Command\Voucher;

use Pilulka\CoreApiClient\Response\Response;

class CreateVoucherResponse implements Response
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
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();
        $result->voucher = $this->objectResult->voucher;
        return $result;
    }
}
