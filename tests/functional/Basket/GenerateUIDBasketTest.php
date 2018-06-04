<?php

namespace Basket;

use Pilulka\CoreApiClient\Command\Basket\GenerateUIDBasket;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Basket\Basket;

class GenerateUIDBasketTest extends \Codeception\Test\Unit
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
    public function testGenerateUIDBasket(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new GenerateUIDBasket());

        $this->assertTrue($response->result);
    }
}