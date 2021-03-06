<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\DailyOfferProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;

class DailyOfferProductTest extends \Codeception\Test\Unit
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
    public function testDailyOfferProduct(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new DailyOfferProduct());

        $this->assertInstanceOf(Product::class, $response[0]);
    }
}
