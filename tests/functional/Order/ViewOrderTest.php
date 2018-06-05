<?php

namespace Order;

use Pilulka\CoreApiClient\Command\Order\ViewOrder;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Order\Order;
use Pilulka\CoreApiClient\Model\Order\OrderItem;

class ViewOrderTest extends \Codeception\Test\Unit
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
    public function testViewOrder(): void
    {
        $orderId = 14;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewOrder($orderId));

        $this->assertTrue($response->result);
        $this->assertInstanceOf(Order::class, $response->order);
        $this->assertInstanceOf(OrderItem::class, $response->order->items[0]);
    }
}