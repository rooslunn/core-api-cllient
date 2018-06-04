<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\CountsProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Model\Query\Query;

class CountsProductTest extends \Codeception\Test\Unit
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
    public function testCountsProduct(): void
    {
        $query = (new Query())->setBrandId(13)->setInStockOnly(true);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CountsProduct($query));

        $this->assertTrue($response->result);
        $attrs = ['supplierCount', 'brandCount', 'paramCount', 'productLinesCount', 'inStockOnlyCount', 'secondQuality'];
        foreach ($attrs as $attr) {
            $this->assertObjectHasAttribute($attr, $response);
        }
    }
}