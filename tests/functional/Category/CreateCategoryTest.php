<?php
namespace Category;

use Pilulka\CoreApiClient\Command\Category\CreateCategory;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Category\{
    Category, CategoryContent, CategoryFilter
};

class CreateCategoryTest extends \Codeception\Test\Unit
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
    public function testCreateCategory()
    {
        $category = new Category([
            'id' => 1,
            'name' => 'Category name',
            'parentId' => 0,
            'position' => 100,
            'content' => new CategoryContent(['long' => 'Very long text']),
            'isActive' => true,
            'isDeleted' => false,
            'image' => 'http://cdn.pilulka.cz/?id=1',
            'inMainMenu' => true,
            'filtes' => [
                new CategoryFilter(['paramId' => 24, 'sort' => 4, 'type' => 0]),
                new CategoryFilter(['paramId' => 20, 'sort' => 3, 'type' => 0]),
            ],
        ]);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateCategory($category));

        $this->assertTrue($response->result);
    }
}