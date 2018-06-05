<?php

namespace Basket;

use Pilulka\CoreApiClient\Command\Basket\KosikBasket;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Basket\Basket;
use Pilulka\CoreApiClient\Model\Basket\BasketItem;
use Pilulka\CoreApiClient\Model\Basket\BasketShipping;
use Pilulka\CoreApiClient\Model\Query\BasketKosikQuery;

class KosikBasketTest extends \Codeception\Test\Unit
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
    public function testKosikBasket(): void
    {
        $query = (new BasketKosikQuery)
            ->setQuery('1234-RTFD-3456-FGW4-F5E4', 10)
            ->setFields([])
            ->setFrom(0)
            ->setSize(10)
            ->setSort([
                'lastname' => 'asc',
                'email' => 'desc',
            ]);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new KosikBasket($query));

        $this->assertTrue($response->result);

        /** @var Basket $testedBasket */
        $testedBasket = $response->Basket[0];
        $this->assertInstanceOf(Basket::class, $testedBasket);
        $this->assertInstanceOf(BasketItem::class, $testedBasket->getBaskets()[0]);
        $this->assertInstanceOf(BasketShipping::class, $testedBasket->getShipping());
    }
}