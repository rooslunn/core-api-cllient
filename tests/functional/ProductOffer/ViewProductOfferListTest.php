<?php

namespace ProductOffer;

use Pilulka\CoreApiClient\Command\ProductOffer\ViewProductOfferList;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductOffer\ProductOffer;

class ViewProductOfferListTest extends Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @throws \Exception
     */
    public function testViewProductOfferList(): void
    {
        $from = 0;
        $size = 20;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductOfferList($from, $size));

        $this->assertInstanceOf(ProductOffer::class, $response['productOffer'][0]);
    }
}
