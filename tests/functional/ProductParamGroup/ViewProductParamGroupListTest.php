<?php

namespace ProductParamGroup;

use Pilulka\CoreApiClient\Command\ProductFavorite\ViewProductFavoriteList;
use Pilulka\CoreApiClient\Command\ProductLine\ViewProductLines;
use Pilulka\CoreApiClient\Command\ProductParamGroup\ViewProductParamGroupList;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;
use Pilulka\CoreApiClient\Model\ProductLine\ProductLine;
use Pilulka\CoreApiClient\Model\ProductParamGroup\ProductParamGroup;

class ViewProductParamGroupListTest extends Unit
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
    public function testViewProductParamGroupList(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductParamGroupList());

        $this->assertInstanceOf(ProductParamGroup::class, $response[12]);
    }
}
