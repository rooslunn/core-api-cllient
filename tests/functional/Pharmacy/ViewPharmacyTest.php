<?php

namespace Pharmacy;

use Pilulka\CoreApiClient\Command\Pharmacy\ViewPharmacy;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Pharmacy\{
    Pharmacy, PharmacyOpeningTime, PharmacyContact, PharmacyLocation
};

class ViewPharmacyTest extends \Codeception\Test\Unit
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
    public function testViewPharmacy(): void
    {
        /** @var Pharmacy $response */
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewPharmacy($id = 1));

        $this->assertInstanceOf(Pharmacy::class, $response);
        $this->assertInstanceOf(PharmacyOpeningTime::class, $response->getOpeningTime());
        $this->assertInstanceOf(PharmacyLocation::class, $response->getLocation());
        $this->assertInstanceOf(PharmacyContact::class, $response->getContact());
    }
}