<?php

namespace Basket;

use Pilulka\CoreApiClient\Command\Basket\InsertShippingBasket;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Basket\Basket;
use Pilulka\CoreApiClient\Request\Basket\InsertShippingRequestParams;

class InsertShippingBasketTest extends \Codeception\Test\Unit
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
    public function testInsertShippingBasket(): void
    {
        $uid = '1414';
        $shippingParams = (new InsertShippingRequestParams)
            ->setShippingId(1)
            ->setShippingData(['data1', 'data2'])
            ->setPayId(14)
            ->setUseCredit(true);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new InsertShippingBasket($uid, $shippingParams));

        $this->assertTrue($response->result);
    }
}