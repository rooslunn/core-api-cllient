<?php

namespace ProductFavorite;

use Pilulka\CoreApiClient\Command\ProductFavorite\CreateProductFavorite;
use Pilulka\CoreApiClient\Command\ProductFavorite\DeleteProductFavorite;
use Pilulka\CoreApiClient\Command\ProductFavorite\ViewProductFavoriteByIds;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;

class ViewProductFavoriteByIdsTest extends Unit
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
    public function testViewProductFavoriteByIds(): void
    {
        $userId = 123;
        $productIds = [321];

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductFavoriteByIds($userId, $productIds));

        $this->assertInstanceOf(ProductFavorite::class, $response[0]);
    }
}
