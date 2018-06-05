<?php

namespace Basket;

use Pilulka\CoreApiClient\Command\Basket\ViewUserBasket;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Basket\Basket;
use Pilulka\CoreApiClient\Model\Basket\BasketUser;

class ViewUserBasketTest extends \Codeception\Test\Unit
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
    public function testViewUserBasket(): void
    {
        $uid = '14';

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewUserBasket($uid));

        $this->assertInstanceOf(BasketUser::class, $response);
    }
}