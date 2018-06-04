<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\ViewProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;

class ViewProductTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /*
     * @group Product
     */
    public function testViewProduct(): void
    {
        $id = 1;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProduct($id));

        $this->assertInstanceOf(Product::class, $response);
    }
}