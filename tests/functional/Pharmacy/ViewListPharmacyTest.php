<?php

namespace Pharmacy;

use Pilulka\CoreApiClient\Command\Pharmacy\ViewListPharmacy;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Pharmacy\{
    Pharmacy, PharmacyList
};

class ViewListPharmacyTest extends \Codeception\Test\Unit
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
    public function testViewListPharmacy(): void
    {
        $params = [
            'query' => 'query',
            'from' => 1,
            'size' => 100,
            'lat' => 60.60,
            'lon' => 14.14,
        ];

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewListPharmacy($params));

        $this->assertInstanceOf(PharmacyList::class, $response);
        $this->assertInstanceOf(Pharmacy::class, $response->pharmacy[0]);
    }
}