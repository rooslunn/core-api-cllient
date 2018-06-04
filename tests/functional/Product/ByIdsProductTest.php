<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\ByIdsProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Model\Sort\SortType;

class ByIdsProductTest extends \Codeception\Test\Unit
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
    public function testByIdsProduct(): void
    {
        $ids = [1, 2, 3];
        $sortMethod = SortType::SORT_METHOD_POPULAR;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ByIdsProduct($ids, $sortMethod));

        $this->assertObjectHasAttribute('total', $response);
        $this->assertInstanceOf(Product::class, $response->products[0]);
    }
}