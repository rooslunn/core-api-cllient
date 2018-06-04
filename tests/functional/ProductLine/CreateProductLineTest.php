<?php

namespace ProductLine;

use Pilulka\CoreApiClient\Command\ProductLine\CreateProductLine;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductLine\ProductLine;

class CreateProductLineTest extends Unit
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
        $productLine = (new ProductLine())->setName('test')->setId(12)->setBrandId(10);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateProductLine($productLine));

        $this->assertTrue($response->result);
        $this->assertEquals(12, $response->productLine);
    }
}
