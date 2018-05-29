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

    /*
     * @group Pharmacy
     */
    public function testViewPharmacy(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewPharmacy($id = 1));

        $this->assertInstanceOf(Pharmacy::class, $response);
        $this->assertInstanceOf(PharmacyOpeningTime::class, $response->openingTime);
        $this->assertInstanceOf(PharmacyLocation::class, $response->location);
        $this->assertInstanceOf(PharmacyContact::class, $response->contact);
    }
}