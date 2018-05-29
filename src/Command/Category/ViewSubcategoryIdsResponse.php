<?php
namespace Pilulka\CoreApiClient\Command\Category;

use Pilulka\CoreApiClient\Response\Response;

class ViewSubcategoryIdsResponse implements Response
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
        return true;
    }


    /**
     * @return array|object
     */
    public function toModel()
    {
        return $this->objectResult;
    }
}