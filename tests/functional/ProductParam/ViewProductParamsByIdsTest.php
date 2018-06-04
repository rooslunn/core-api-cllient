<?php

namespace ProductParam;

use Pilulka\CoreApiClient\Command\ProductParam\ViewProductParamsByIds;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductParam\ProductParam;

class ViewProductParamsByIdsTest extends Unit
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
    public function testViewProductParamsByIds(): void
    {
        $productIds = [12];

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductParamsByIds($productIds));

        $this->assertInstanceOf(ProductParam::class, $response[0]);
    }
}
