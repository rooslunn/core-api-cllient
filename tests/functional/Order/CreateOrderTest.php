<?php

namespace Order;

use Pilulka\CoreApiClient\Command\Order\CreateOrder;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Order\Order;

class CreateOrderTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /*
     * @group Order
     */
    public function testCreateOrder(): void
    {
        $this->markTestIncomplete('Order/Create incomplete');
//        $order = new Order([
//            'userId' => 1,
//            'status' => 1,
//            'isPaid' => true,
//            'firstName' => 'Russ',
//            'lastName' => 'Kladko',
//            'email' => 'russ@russ.me',
//            'phone' => '+380 50 233-00-33',
//            'company' => 'Russ s.r.o',
//            'ico' => '123123',
//            'dic' => 'CZ123123',
//            'street' => 'Elm Street',
//            'city' => 'City',
//            'zip' => '77001',
//            'noteAdmin' => '\\',
//            'price' => 1000.99,
//            'items' => [
//                [
//                    'itemId' =>1414,
//                    'itemType' => 'product',
//                    'name' => 'Product',
//                    'vat' => 14,
//                    'price' => 14.44,
//                    'priceVat' => 16.47,
//                    'amount' => 1,,
//                    'data' => 'PAY_CACHE_ON_DELIVERY',
//                    'addData' => ['zasilkovna' => null, 'pharmacy' => null],
//                ]
//            ]
//        ]);

//        $response = (new JsonApiClient(CORE_API_URL_BASE))
//            ->send(new CreateOrder($order));
//
//        $this->assertTrue($response->result);
    }
}