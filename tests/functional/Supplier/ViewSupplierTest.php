<?php

namespace Supplier;

use Pilulka\CoreApiClient\Command\ProductParam\ViewProductParams;
use Pilulka\CoreApiClient\Command\Supplier\ViewSupplier;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductParam\ProductParam;
use Pilulka\CoreApiClient\Model\Supplier\Supplier;

class ViewSupplierTest extends Unit
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
    public function testViewSupplier(): void
    {
        $id = 79;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewSupplier($id));

        $this->assertInstanceOf(Supplier::class, $response);
    }
}
