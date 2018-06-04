<?php

namespace ProductFavorite;

use Pilulka\CoreApiClient\Command\ProductFavorite\CreateProductFavorite;
use Pilulka\CoreApiClient\Command\ProductFavorite\DeleteProductFavorite;
use Pilulka\CoreApiClient\Command\ProductFavorite\ViewProductFavoriteByIds;
use Pilulka\CoreApiClient\Command\ProductFavorite\ViewProductFavoriteCount;
use Pilulka\CoreApiClient\Command\ProductFavorite\ViewProductFavoriteList;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;

class ViewProductFavoriteListTest extends Unit
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
    public function testViewProductFavoriteList(): void
    {
        $userId = 123;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductFavoriteList($userId));

        $this->assertInstanceOf(ProductFavorite::class, $response[0]);
    }
}
