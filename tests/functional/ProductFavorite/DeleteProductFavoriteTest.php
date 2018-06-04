<?php

namespace ProductFavorite;

use Pilulka\CoreApiClient\Command\ProductFavorite\CreateProductFavorite;
use Pilulka\CoreApiClient\Command\ProductFavorite\DeleteProductFavorite;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;

class DeleteProductFavoriteTest extends Unit
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
    public function testDeleteProductFavorite(): void
    {
        $productFavorite = (new ProductFavorite())->setUserId(123)->setProductId(321);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new DeleteProductFavorite($productFavorite));

        $this->assertTrue($response->result);
    }
}
