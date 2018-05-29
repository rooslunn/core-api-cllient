<?php

namespace Pilulka\CoreApiClient\Command\Pharmacy;

use JsonMapper;
use Pilulka\CoreApiClient\Model\Pharmacy\{
    Pharmacy, PharmacyLocation, PharmacyContact, PharmacyOpeningTime
};
use Pilulka\CoreApiClient\Response\Response;

class ViewPharmacyResponse implements Response
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
     * @return object|Pharmacy
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $mapper = new JsonMapper();
        return $mapper->map($this->objectResult, new Pharmacy());

//        $pharmacy = new Pharmacy($this->objectResult);
//        $pharmacy->location = new PharmacyLocation($pharmacy->location);
//        $pharmacy->contact = new PharmacyContact($pharmacy->contact);
//        $pharmacy->openingTime = new PharmacyOpeningTime($pharmacy->openingTime);
//        return $pharmacy;
    }
}