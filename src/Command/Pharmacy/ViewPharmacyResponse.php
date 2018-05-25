<?php

namespace Pilulka\CoreApiClient\Command\Pharmacy;

use Pilulka\CoreApiClient\Model\Pharmacy\{
    Pharmacy, PharmacyLocation, PharmacyContact, PharmacyOpeningTime
};
use Pilulka\CoreApiClient\Response\Response;

class ViewPharmacyResponse implements Response
{
    /**
     * @var array
     */
    private $arrayResult;

    public function __construct(array $arrayResult)
    {
        $this->arrayResult = $arrayResult;
    }

    public function result(): bool
    {
        return $this->arrayResult['id'] ? true : false;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->arrayResult;
    }

    /**
     * @return Pharmacy
     */
    public function toModel(): Pharmacy
    {
        $pharmacy = new Pharmacy($this->arrayResult);
        $pharmacy->location = new PharmacyLocation($pharmacy->location);
        $pharmacy->contact = new PharmacyContact($pharmacy->contact);
        $pharmacy->openingTime = new PharmacyOpeningTime($pharmacy->openingTime);
        return $pharmacy;
    }
}