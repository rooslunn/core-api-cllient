<?php

namespace Manufacturer;

use Pilulka\CoreApiClient\Command\Manufacturer\CreateManufacturer;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Manufacturer\Manufacturer;

class CreateManufacturerTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /*
     * @group Manufacturer
     */
    public function testCreateManufacturer(): void
    {
        $manufacturer = new Manufacturer([
            'id' => 1,
            'name' => 'Manufacturer name',
            'content' => 'Manufacturer content',
        ]);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateManufacturer($manufacturer));

        $this->assertTrue($response->result);
    }
}