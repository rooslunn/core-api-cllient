<?php

namespace Pharmacy;

use Pilulka\CoreApiClient\Command\Pharmacy\CreatePharmacy;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Pharmacy\Pharmacy;

class CreatePharmacyTest extends \Codeception\Test\Unit
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
    public function testCreatePharmacy(): void
    {
        $pharmacy = new Pharmacy([
            'id' => 1,
            'name' => 'Pharmacy name',
        ]);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreatePharmacy($pharmacy));

        $this->assertTrue($response->result);
    }
}