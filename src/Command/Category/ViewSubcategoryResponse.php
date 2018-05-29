<?php
namespace Pilulka\CoreApiClient\Command\Category;

use JsonMapper;
use Pilulka\CoreApiClient\Model\Category\{
    Category
};
use Pilulka\CoreApiClient\Response\Response;

class ViewSubcategoryResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    public function __construct($arrayResult)
    {
        $this->objectResult = $arrayResult;
    }

    public function result(): bool
    {
        return $this->objectResult->total ? true : false;
    }

    /**
     * @return array
     * @throws \JsonMapper_Exception
     */
    public function toModel(): array
    {
        $result['total'] = $this->objectResult->total;

        $mapper = new JsonMapper();

        foreach ($this->objectResult->categories as $category) {
            $result['categories'][] = $mapper->map($category, new Category());
        }

        return $result;
    }
}