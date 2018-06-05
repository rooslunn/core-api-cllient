<?php

namespace ProductParam;

use Pilulka\CoreApiClient\Command\ProductParam\ViewProductParams;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductParam\ProductParam;

class ViewProductParamsTest extends Unit
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
    public function testViewProductParams(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductParams());

        $this->assertInstanceOf(ProductParam::class, $response['productParam'][12]);
    }
}
