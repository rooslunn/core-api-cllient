<?php

namespace Order;

use Pilulka\CoreApiClient\Command\Order\ChangeStatusOrder;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Order\Order;

class ChangeStatusOrderTest extends \Codeception\Test\Unit
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
    public function testChangeStatusOrder(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ChangeStatusOrder($orderNum = '23', $status = 1));

        $this->assertTrue($response->result);
    }
}