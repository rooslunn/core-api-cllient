<?php

namespace Basket;

use Pilulka\CoreApiClient\Command\Basket\InsertShippingBasket;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Basket\Basket;

class InsertShippingBasketTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /*
     * @group Basket
     */
    public function testInsertShippingBasket(): void
    {
        $uid = '1414';

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new InsertShippingBasket($uid));

        $this->assertTrue($response->result);
    }
}