<?php

namespace ProductParam;

use Pilulka\CoreApiClient\Command\ProductParam\CreateProductParam;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductParam\ProductParam;

class CreateProductParamTest extends Unit
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
    public function testCreateProductLine(): void
    {
        $productParam = (new ProductParam())->setName('test')->setId(12)->setValue('betadine')->setParamGroupId(8);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateProductParam($productParam));

        $this->assertTrue($response->result);
        $this->assertEquals(12, $response->productParam);
    }
}
