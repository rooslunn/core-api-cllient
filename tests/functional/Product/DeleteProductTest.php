<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\DeleteProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;

class DeleteProductTest extends \Codeception\Test\Unit
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
    public function testDeleteProduct(): void
    {
        $product = (new Product())->setId(1);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new DeleteProduct($product));

        $this->assertTrue($response->result);
    }
}