<?php

namespace ProductFavorite;

use Pilulka\CoreApiClient\Command\ProductFavorite\CreateProductFavorite;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;

class CreateProductFavoriteTest extends Unit
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
    public function testCreateProductFavorite(): void
    {
        $productFavorite = (new ProductFavorite())->setUserId(123)->setProductId(321);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateProductFavorite($productFavorite));

        $this->assertTrue($response->result);
    }
}
