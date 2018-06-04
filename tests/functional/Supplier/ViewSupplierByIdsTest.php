<?php

namespace Supplier;

use Pilulka\CoreApiClient\Command\Supplier\ViewSupplierByIds;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Supplier\Supplier;

class ViewSupplierByIdsTest extends Unit
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
    public function testViewSupplierByIds(): void
    {
        $ids = [79];

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewSupplierByIds($ids));

        $this->assertInstanceOf(Supplier::class, $response[0]);
    }
}
