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
        $ids = [1, 10];

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductShipping($ids));

        $this->assertFalse($response[0]->is_pilulka_car);
    }
}
