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


    /**
     * @throws \ReflectionException
     */
    public function testCreateManufacturer(): void
    {
        $manufacturer = $this->createMock(Manufacturer::class);
        $manufacturer->method('getId')
            ->willReturn(1);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateManufacturer($manufacturer));

        $this->assertTrue($response->result);
    }
}