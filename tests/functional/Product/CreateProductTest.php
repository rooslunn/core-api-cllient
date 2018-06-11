<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\CreateProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Tests\utils\ProductUtility;

class CreateProductTest extends \Codeception\Test\Unit
{
    /**
     * @var Product
     */
    private $product;

    protected function _before()
    {
        $this->product = $this->createProduct();
    }

    protected function _after()
    {
    }

    /**
     * @group Product
     * @throws \Exception
     */
    public function testCreateProduct(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateProduct($this->product));

        $this->assertTrue($response->result);
    }

    /**
     * @return Product
     */
    public function createProduct(): Product
    {
        $product = ProductUtility::createProduct();

        return $product;
    }
}
