<?php

namespace Shipping;

use Pilulka\CoreApiClient\Command\Shipping\CreateShipping;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Shipping\Shipping;

class CreateShippingTest extends Unit
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
    public function testCreateShipping(): void
    {
        $shipping = $this->createMock(Shipping::class);
        $shipping->method('getId')
            ->willReturn(5);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateShipping($shipping));

        $this->assertTrue($response->result);
        $this->assertEquals(5, $response->shipping);
    }
}
