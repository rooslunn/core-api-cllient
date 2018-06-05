<?php

namespace Basket;

use Pilulka\CoreApiClient\Command\Basket\ClearBasket;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Basket\Basket;

class ClearBasketTest extends \Codeception\Test\Unit
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
    public function testClearBasket(): void
    {
        $uid = '14-14';

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ClearBasket($uid));

        $this->assertTrue($response->result);
    }
}