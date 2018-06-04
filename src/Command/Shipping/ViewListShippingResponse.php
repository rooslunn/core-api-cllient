<?php

namespace Pilulka\CoreApiClient\Command\Shipping;

use JsonMapper;
use Pilulka\CoreApiClient\Model\Shipping\Shipping;
use Pilulka\CoreApiClient\Response\Response;

class ViewListShippingResponse implements Response
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
     * @return object|array
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $return['total'] = $this->objectResult->total;

        $mapper = new JsonMapper();

        foreach ($this->objectResult->shipping ?? [] as $item) {
            $return['shipping'][] = $mapper->map($item, new Shipping());
        }

        return $return;
    }
}
