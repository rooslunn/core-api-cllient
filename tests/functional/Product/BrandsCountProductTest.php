<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\BrandsCountProduct;
use Pilulka\CoreApiClient\JsonApiClient;

class BrandsCountProductTest extends \Codeception\Test\Unit
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
    public function testBrandsCountProduct(): void
    {
        $params = [
            'query' => 'query',
            'categoryId' => 1,
            'brandId' => 1,
        ];

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new BrandsCountProduct($params));

        $this->assertTrue($response->result);
    }
}
