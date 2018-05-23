<?php
namespace Category;

use Pilulka\CoreApiClient\Command\Category\DeleteCategory;
use Pilulka\CoreApiClient\JsonApiClient;

class DeleteCategoryTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /*
     * @group Category
     */
    public function testDeleteCategory()
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new DeleteCategory(1));
        $this->assertTrue($response->result);
    }
}