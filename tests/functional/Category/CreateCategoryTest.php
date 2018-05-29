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

    /**
     * @throws \ReflectionException
     */
    public function testCreateCategory()
    {
        $category = $this->createMock(Category::class);
        $category->method('getId')
            ->willReturn(1);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateCategory($category));

        $this->assertTrue($response->result);
    }
}