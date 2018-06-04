<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\CreateProduct;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Model\Product\ProductAttributes;
use Pilulka\CoreApiClient\Model\Product\ProductContent;

class CreateProductTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /*
     * @group Product
     */
    public function testCreateProduct(): void
    {
        $product = (new Product())->setId(1)->setPrice(100);

        $attrs = (new ProductAttributes())->setEan('8590322000410')->setSimilarProducts([2160, 6595]);
        $product->setAttributes($attrs);

        $content = (new ProductContent())->setShort('text');
        $product->setContent($content);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateProduct($product));

        $this->assertTrue($response->result);
    }
}