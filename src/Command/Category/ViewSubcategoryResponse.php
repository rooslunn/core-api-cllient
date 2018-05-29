<?php
namespace Pilulka\CoreApiClient\Command\Category;

use Pilulka\CoreApiClient\Model\Category\{
    Category, CategoryContent, CategoryFilter, Subcategory
};
use Pilulka\CoreApiClient\Response\Response;

class ViewSubcategoryResponse implements Response
{
    /**
     * @var array
     */
    private $arrayResult;

    public function __construct(array $arrayResult)
    {
        $this->arrayResult = $arrayResult;
    }

    public function result(): bool
    {
        return $this->arrayResult['total'] ? true : false;
    }

    /**
     * @return array
     */
    public function toObject(): array
    {
        return $this->arrayResult;
    }

    /**
     * @return Subcategory
     */
    public function toModel(): Subcategory
    {
        $subcategory = new Subcategory($this->arrayResult);

        $subcategory->categories = array_map(function ($category) {
            $category = new Category($category);
            if (isset($category->content)) {
                $category->content = new CategoryContent($category->content);
            }
            if (isset($category->filters)) {
                $category->filters = array_map(function ($filter) {
                    return new CategoryFilter($filter);
                }, $category->filters);
            }
            return $category;
        }, $subcategory->categories);

        return $subcategory;
    }
}