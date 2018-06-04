<?php

namespace ProductLine;

use Pilulka\CoreApiClient\Command\ProductFavorite\ViewProductFavoriteList;
use Pilulka\CoreApiClient\Command\ProductLine\ViewProductLines;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;
use Pilulka\CoreApiClient\Model\ProductLine\ProductLine;

class ViewProductLinesTest extends Unit
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
    public function testViewProductLines(): void
    {
        $ids = [12];

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductLines($ids));

        $this->assertInstanceOf(ProductLine::class, $response['productLine'][0]);
    }
}
