<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\SearchProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;

class SearchProductTest extends \Codeception\Test\Unit
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
    public function testSearchProduct(): void
    {
        $query = 'query';

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new SearchProduct($query));

        $this->assertInstanceOf(Product::class, $response[0]);
    }
}