<?php

namespace Voucher;

use Pilulka\CoreApiClient\Command\Voucher\CreateVoucher;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Voucher\Voucher;

class CreateVoucherTest extends Unit
{
    private $voucher;

    protected function _before()
    {
        $this->voucher = $this->createVoucher();
    }

    protected function _after()
    {
    }

    /**
     * @throws \Exception
     */
    public function testCreateVoucher(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateVoucher($this->voucher));

        $this->assertTrue($response->result);
        $this->assertEquals(5, $response->voucher);
    }

    /**
     * @return Voucher
     */
    private function createVoucher(): Voucher
    {
        $voucher = new Voucher();

        $voucher->setId(1);
        $voucher->setName('');
        $voucher->setCode('');
        $voucher->setVoucherType(1);
        $voucher->setLimitType(1);
        $voucher->setSaleType(1);
        $voucher->setMinOrderAmount(1.2);
        $voucher->setVoucherValue(100.0);
        $voucher->setValidFrom(new \DateTime());
        $voucher->setValidTo(new \DateTime());
        $voucher->setValidProducts([]);
        $voucher->setValidBrands([]);
        $voucher->setValidCategories([]);
        $voucher->setValidManufacturers([]);
        $voucher->setValidDeliveryMethods([]);

        return $voucher;
    }
}
