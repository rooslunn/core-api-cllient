<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\FilterProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Brand\Brand;
use Pilulka\CoreApiClient\Model\Category\Category;
use Pilulka\CoreApiClient\Model\Manufacturer\Manufacturer;
use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Model\Query\Query;

class FilterProductTest extends \Codeception\Test\Unit
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
    public function testFilterProduct(): void
    {
        $query = (new Query())->setQuery('query')->setSecondQuality(false);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new FilterProduct($query));

        $this->assertTrue($response->result);
        $this->assertInstanceOf(Product::class, $response->product[0]);
        $this->assertInstanceOf(Brand::class, $response->brand[0]);
        $this->assertInstanceOf(Category::class, $response->category[0]);
        $this->assertInstanceOf(Manufacturer::class, $response->manufacturer[0]);
    }
}