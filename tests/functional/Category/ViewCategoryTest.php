<?php
namespace Category;

use Pilulka\CoreApiClient\Command\Category\ViewCategory;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Category\{
    CategoryContent, CategoryFilter
};

class ViewCategoryTest extends \Codeception\Test\Unit
{
    private const APIARY_CATEGORY_ID = 240;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /*
     * @group Category
     */
    public function testViewCategory()
    {
        $category = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewCategory(self::APIARY_CATEGORY_ID));

        $this->assertEquals(self::APIARY_CATEGORY_ID, $category->id);
        $this->assertInstanceOf(CategoryContent::class, $category->content);
        $this->assertInstanceOf(CategoryFilter::class, $category->filters[0]);
    }
}