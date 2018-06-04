<?php

namespace Supplier;

use Pilulka\CoreApiClient\Command\Supplier\CreateSupplier;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Supplier\Supplier;

class CreateSupplierTest extends Unit
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
    public function testCreateSupplier(): void
    {
        $supplier = (new Supplier())->setId(5);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateSupplier($supplier));

        $this->assertTrue($response->result);
        $this->assertEquals(5, $response->supplier);
    }
}
