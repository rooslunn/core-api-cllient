<?php

namespace Pilulka\CoreApiClient\Model\Pharmacy;

use Pilulka\CoreApiClient\Model\JsonModel;

class Pharmacy extends JsonModel
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  null|string */
    private $type;

    /** @var PharmacyLocation */
    private $location;

    /** @var PharmacyContact */
    private $contact;

    /** @var PharmacyOpeningTime */
    private $openingTime;

    /** @var float|null */
    private $distance;

    /** @var string */
    private $region;

    /** @var bool */
    private $isActive;

}