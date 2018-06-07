<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\PriceExtremesProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Model\Query\Query;

class PriceExtremesProductTest extends \Codeception\Test\Unit
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
    public function testPriceExtremesProduct(): void
    {
        $query = (new Query())->setQuery('query')->setBrandId([1])->setCategoryId([1]);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new PriceExtremesProduct($query));

        $this->assertTrue($response->result);
    }
}