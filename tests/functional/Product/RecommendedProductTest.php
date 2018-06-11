<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\RecommendedProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;

class RecommendedProductTest extends \Codeception\Test\Unit
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
    public function testRecommendedProduct(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new RecommendedProduct());

        $this->assertTrue($response->result);
        $this->assertInstanceOf(Product::class, $response->products[0]);
    }
}
