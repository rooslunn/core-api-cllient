<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\ProductsCountProduct;
use Pilulka\CoreApiClient\JsonApiClient;

class ProductsCountProductTest extends \Codeception\Test\Unit
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
    public function testProductsCountProduct(): void
    {
        $params = [
            'query' => 'query',
            'brandId' => 1,
            'paramId' => 1,
        ];

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ProductsCountProduct($params));

        $this->assertTrue($response->result);
        $this->assertObjectHasAttribute('count', $response->data);
    }
}