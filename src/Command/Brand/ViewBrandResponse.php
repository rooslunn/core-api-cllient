<?php


namespace Pilulka\CoreApiClient\Command\Brand;


use JsonMapper;
use Pilulka\CoreApiClient\Model\Brand\Brand;
use Pilulka\CoreApiClient\Response\Response;

class ViewBrandResponse implements Response
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
     * @return object|Brand
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $mapper = new JsonMapper();
        return $mapper->map($this->objectResult, new Brand());
    }
}