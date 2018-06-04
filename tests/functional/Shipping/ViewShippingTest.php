<?php

namespace Shipping;

use Pilulka\CoreApiClient\Command\Shipping\ViewShipping;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Shipping\Shipping;

class ViewShippingTest extends Unit
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
    public function testViewShipping(): void
    {
        $id = 5;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewShipping($id));

        $this->assertInstanceOf(Shipping::class, $response);
    }
}
