<?php


namespace Pilulka\CoreApiClient\Command\Product;


use Pilulka\CoreApiClient\Response\Response;

class ViewProductSuppliersCountsResponse implements Response
{

    /**
     * @var object
     */
    private $objectResult;

    public function __construct($arrayResult)
    {
        $this->objectResult = $arrayResult;
    }

    /**
     * @return bool
     */
    public function result(): bool
    {
        return $this->objectResult ? true : false;
    }

    /**
     * @return object
     */
    public function toModel()
    {
        return $this->objectResult;
    }
}