<?php

namespace ProductFavorite;

use Pilulka\CoreApiClient\Command\ProductFavorite\CreateProductFavorite;
use Pilulka\CoreApiClient\Command\ProductFavorite\DeleteProductFavorite;
use Pilulka\CoreApiClient\Command\ProductFavorite\ViewProductFavoriteByIds;
use Pilulka\CoreApiClient\Command\ProductFavorite\ViewProductFavoriteCount;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;

class ViewProductFavoriteCountTest extends Unit
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
    public function testViewProductFavoriteCount(): void
    {
        $userId = 123;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductFavoriteCount($userId));

        $this->assertEquals(100, $response->count);
    }
}
