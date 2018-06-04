<?php

namespace ProductLine;

use Pilulka\CoreApiClient\Command\ProductLine\ViewProductLine;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductLine\ProductLine;

class ViewProductLineTest extends Unit
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
    public function testViewProductLine(): void
    {
        $id = 12;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductLine($id));

        $this->assertInstanceOf(ProductLine::class, $response);
    }
}
