<?php
namespace Pilulka\CoreApiClient\Command\Category;

use JsonMapper;
use Pilulka\CoreApiClient\Model\Category\{
    Category
};
use Pilulka\CoreApiClient\Response\Response;

class ViewCategoryTreeResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;
    private $mapper;

    public function __construct($arrayResult)
    {
        $this->objectResult = $arrayResult;
        $this->mapper = new JsonMapper();
    }

    public function result(): bool
    {
        return is_array($this->objectResult);
    }

    /**
     * @return array
     * @throws \JsonMapper_Exception
     */
    public function toModel(): array
    {
        $result = [];

        foreach ($this->objectResult->categories ?? [] as $category) {
            $result[] = $this->categories($category);
        }

        return $result;
    }

    /**
     * @param array $categories
     * @return array
     * @throws \JsonMapper_Exception
     */
    private function categories(array $categories): array {
        $result = [];

        foreach ($categories ?? [] as $category) {
            $cat = $this->mapper->map($category, new Category());
            $cat->categories = $this->categories($category->categories);
            $result[] = $cat;

        }

        return $result;
    }
}