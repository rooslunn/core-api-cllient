<?php
namespace Pilulka\CoreApiClient\Command\Category;

use Pilulka\CoreApiClient\Model\Category\Category;
use Pilulka\CoreApiClient\Model\Category\CategoryContent;
use Pilulka\CoreApiClient\Model\Category\CategoryFilter;
use Pilulka\CoreApiClient\Response\Response;

class ViewCategoryResponse implements Response
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
        return $this->arrayResult['id'] ? true : false;
    }

    /**
     * @return array
     */
    public function toObject(): array
    {
        return $this->arrayResult;
    }

    /**
     * @return Card
     */
    public function toModel(): Category
    {
        $category = new Category($this->arrayResult);

        if (isset($category->content)) {
            $category->content = new CategoryContent($category->content);
        }

        if (isset($category->filters)) {
            $category->filters = array_map(function ($filter) {
                return new CategoryFilter($filter);
            }, $category->filters);
        }

        return $category;
    }
}