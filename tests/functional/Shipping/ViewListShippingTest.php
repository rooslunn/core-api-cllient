<?php

namespace Shipping;

use Pilulka\CoreApiClient\Command\Shipping\ViewListShipping;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Shipping\Shipping;

class ViewListShippingTest extends Unit
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
    public function testViewListShipping(): void
    {
        $from = 0;
        $size = 20;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewListShipping($from, $size));

        $this->assertInstanceOf(Shipping::class, $response['shipping'][0]);
    }
}
