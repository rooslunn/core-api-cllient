<?php
namespace Category;

use Pilulka\CoreApiClient\Command\Category\ViewSubcategory;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Category\{
    Category, CategoryContent, CategoryFilter
};

class ViewSubcategoryTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testViewSubcategory()
    {
        $subcategory = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewSubcategory(1));

        $category = $subcategory->categories[0];
        $this->assertInstanceOf(Category::class, $category);
        $this->assertInstanceOf(CategoryContent::class, $category->content);
        $this->assertInstanceOf(CategoryFilter::class, $category->filters[0]);
    }
}