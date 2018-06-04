<?php

namespace Pilulka\CoreApiClient\Command\ProductLine;

use Pilulka\CoreApiClient\Model\ProductLine\ProductLine;
use Pilulka\CoreApiClient\Response\Response;

class ViewProductLinesResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * DeleteProductFavoriteResponse constructor.
     * @param $arrayResult
     */
    public function __construct($arrayResult)
    {
        $this->objectResult = $arrayResult;
    }

    /**
     * @return bool
     */
    public function result(): bool
    {
        return is_iterable($this->objectResult);
    }

    /**
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $return['total'] = $this->objectResult->total;

        $mapper = new \JsonMapper();

        foreach ($this->objectResult->productLine ?? [] as $line) {
            $return['productLine'][] = $mapper->map($line, new ProductLine());
        }

        return $return;
    }
}
