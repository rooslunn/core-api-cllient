<?php

namespace ProductParamGroup;

use Pilulka\CoreApiClient\Command\ProductLine\CreateProductLine;
use Pilulka\CoreApiClient\Command\ProductParamGroup\CreateProductParamGroup;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductLine\ProductLine;
use Pilulka\CoreApiClient\Model\ProductParamGroup\ProductParamGroup;

class CreateProductParamGroupTest extends Unit
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
    public function testCreateProductParamGroup(): void
    {
        $productParamGroup = (new ProductParamGroup())->setName('betadine')->setId(12);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateProductParamGroup($productParamGroup));

        $this->assertTrue($response->result);
        $this->assertEquals(12, $response->productParamGroup);
    }
}
