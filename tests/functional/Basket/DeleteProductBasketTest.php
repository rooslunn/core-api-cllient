<?php

namespace Basket;

use Pilulka\CoreApiClient\Command\Basket\DeleteProductBasket;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Basket\Basket;

class DeleteProductBasketTest extends \Codeception\Test\Unit
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
    public function testDeleteProductBasket(): void
    {
        $uid = '1234-4567-1234';
        $productId = 14;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new DeleteProductBasket($uid, $productId));

        $this->assertTrue($response->result);
    }
}