<?php

namespace Basket;

use Pilulka\CoreApiClient\Command\Basket\InsertUserBasket;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Basket\Basket;
use Pilulka\CoreApiClient\Request\Basket\InsertUserRequestParams;

class InsertUserBasketTest extends \Codeception\Test\Unit
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
    public function testInsertUserBasket(): void
    {
        $uid = '14';
        $requestParams = (new InsertUserRequestParams())
            ->setName('Russ')
            ->setDelName('Lunn')
            ->setCity('Prague')
            ->setDelCity('London');

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new InsertUserBasket($uid, $requestParams));

        $this->assertTrue($response->result);
    }
}