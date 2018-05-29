<?php

namespace Pharmacy;

use Pilulka\CoreApiClient\Command\Pharmacy\DeletePharmacy;
use Pilulka\CoreApiClient\JsonApiClient;

class DeletePharmacyTest extends \Codeception\Test\Unit
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
    public function testDeletePharmacy(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new DeletePharmacy($id = 1));

        $this->assertTrue($response->result);
    }
}