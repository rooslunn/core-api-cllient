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
        $order = (new Order)
            ->setUserId(1)
            ->setStatus(1)
            ->setIsPaid(true)
            ->setFirstName('Russ')
            ->setLastName('Kladko')
            ->setEmail('russ@russ.me')
            ->setPhone('+380 50 233-00-33')
            ->setCompany('Russ s.r.o')
            ->setIco('123123')
            ->setDic('CZ123123')
            ->setStreet('Elm Street')
            ->setCity('City')
            ->setZip('77001')
            ->setNoteAdmin('\\')
            ->setPrice(1000.99);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateOrder($order));

        $this->assertTrue($response->result);
    }
}