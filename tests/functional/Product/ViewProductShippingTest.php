<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\ViewProductShipping;
use Pilulka\CoreApiClient\JsonApiClient;

class ViewProductShippingTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @group Product
     * @throws \Exception
     */
    public function testViewProductShipping(): void
    {
        $id = 1;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductShipping($id));

        $this->assertFalse($response->is_pilulka_car);
    }
}
