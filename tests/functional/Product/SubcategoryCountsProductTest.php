<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\SubcategoryCountsProduct;
use Pilulka\CoreApiClient\JsonApiClient;

class SubcategoryCountsProductTest extends \Codeception\Test\Unit
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
    public function testSubcategoryCountsProduct(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new SubcategoryCountsProduct($ids = [1, 2, 3]));

        $this->assertTrue($response->result);
    }
}
