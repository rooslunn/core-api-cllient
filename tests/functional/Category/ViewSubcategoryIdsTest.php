<?php
namespace Category;

use Pilulka\CoreApiClient\Command\Category\ViewSubcategoryIds;
use Pilulka\CoreApiClient\JsonApiClient;

class ViewSubcategoryIdsTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testViewSubcategoryIds()
    {
        $ids = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewSubcategoryIds($parentId = 1));
        $this->assertInternalType('array', $ids);
    }
}