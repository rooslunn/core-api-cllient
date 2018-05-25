<?php

namespace Pharmacy;

use Pilulka\CoreApiClient\Command\Pharmacy\UpdatePharmacy;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Pharmacy\Pharmacy;

class UpdatePharmacyTest extends \Codeception\Test\Unit
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
    public function testUpdatePharmacy(): void
    {
        $pharmacy = new Pharmacy([
            'id' => 1,
            'name' => 'Pharmacy name',
        ]);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new UpdatePharmacy($pharmacy));

        $this->assertTrue($response->result);
    }
}