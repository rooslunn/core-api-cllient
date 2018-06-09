<?php

namespace Supplier;

use Pilulka\CoreApiClient\Command\Supplier\CreateSupplier;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Supplier\Supplier;
use Pilulka\CoreApiClient\Model\Supplier\SupplierContent;

class CreateSupplierTest extends Unit
{
    /**
     * @var Supplier
     */
    private $supplier;

    protected function _before()
    {
        $this->supplier = $this->createSupplier();
    }

    protected function _after()
    {
    }

    /**
     * @throws \Exception
     */
    public function testCreateSupplier(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateSupplier($this->supplier));

        $this->assertTrue($response->result);
        $this->assertEquals(5, $response->supplier);
    }

    /**
     * @return Supplier
     */
    private function createSupplier(): Supplier
    {
        $supplier = new Supplier();
        $content = (new SupplierContent())->setLong('');

        $supplier->setId(1);
        $supplier->setName('');
        $supplier->setLogo('');
        $supplier->setWebsite('');
        $supplier->setManufacturerId(1);
        $supplier->setContent($content);

        return $supplier;
    }
}
