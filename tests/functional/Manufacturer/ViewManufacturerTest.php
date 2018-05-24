<?php

namespace Manufacturer;

use Pilulka\CoreApiClient\Command\Manufacturer\ViewManufacturer;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Manufacturer\Manufacturer;

class ViewManufacturerTest extends \Codeception\Test\Unit
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
    public function testViewManufacturer(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewManufacturer(1));

        $this->assertInstanceOf(Manufacturer::class, $response);
    }
}