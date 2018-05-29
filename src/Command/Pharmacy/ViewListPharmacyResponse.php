<?php

namespace Pilulka\CoreApiClient\Command\Pharmacy;

use JsonMapper;
use Pilulka\CoreApiClient\Model\Pharmacy\Pharmacy;
use Pilulka\CoreApiClient\Response\Response;

class ViewListPharmacyResponse implements Response
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

        foreach ($this->objectResult->pharmacy ?? [] as $pharma) {
            $return['pharmacy'][] = $mapper->map($pharma, new Pharmacy());
        }

        return $return;
    }
}