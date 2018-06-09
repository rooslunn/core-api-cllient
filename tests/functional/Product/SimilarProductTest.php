<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\SimilarProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;

class SimilarProductTest extends \Codeception\Test\Unit
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
    public function testSimilarProduct(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new SimilarProduct($id = 1, $categoryIds = [1, 2, 3], $size = 20));

        $this->assertTrue($response->result);
        $this->assertInstanceOf(Product::class, $response->products[0]);
    }
}
