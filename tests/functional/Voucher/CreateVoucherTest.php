<?php

namespace Voucher;

use Pilulka\CoreApiClient\Command\Voucher\CreateVoucher;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Voucher\Voucher;

class CreateVoucherTest extends Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @throws \Exception
     */
    public function testCreateVoucher(): void
    {
        $voucher = (new Voucher());

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateVoucher($voucher));

        $this->assertTrue($response->result);
        $this->assertEquals(5, $response->voucher);
    }
}
