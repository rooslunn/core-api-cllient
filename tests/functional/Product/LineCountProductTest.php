<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\LineCountProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Query\Query;

class LineCountProductTest extends \Codeception\Test\Unit
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
    public function testLineCountProduct(): void
    {
        $query = (new Query())->setQuery('query')->setCategoryId(1)->setBrandId(1);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new LineCountProduct($query));

        $this->assertTrue($response->result);
    }
}