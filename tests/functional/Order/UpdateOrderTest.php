<?php

namespace Order;

use Pilulka\CoreApiClient\Command\Order\UpdateOrder;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Order\Order;

class UpdateOrderTest extends \Codeception\Test\Unit
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
    public function testUpdateOrder(): void
    {
        $order = (new Order())->setId(10)->setUserId(1)->setStatus(1);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new UpdateOrder($order));

        $this->assertTrue($response->result);
    }
}