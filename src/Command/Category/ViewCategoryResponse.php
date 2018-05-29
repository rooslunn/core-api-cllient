<?php
namespace Pilulka\CoreApiClient\Command\Category;

use JsonMapper;
use Pilulka\CoreApiClient\Model\Category\Category;
use Pilulka\CoreApiClient\Model\Category\CategoryContent;
use Pilulka\CoreApiClient\Model\Category\CategoryFilter;
use Pilulka\CoreApiClient\Response\Response;

class ViewCategoryResponse implements Response
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
        return $this->objectResult->id ? true : false;
    }


    /**
     * @return object|Category
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $mapper = new JsonMapper();
        return $mapper->map($this->objectResult, new Category());
    }
}