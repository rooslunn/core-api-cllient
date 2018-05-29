<?php

namespace Pilulka\CoreApiClient\Model\Pharmacy;

use Pilulka\CoreApiClient\Model\JsonModel;

class PharmacyOpeningTime extends JsonModel
{
    /** @var string */
    private $monday;
    /** @var string */
    private $tuesday;
    /** @var string */
    private $wednesday;
    /** @var string */
    private $thursday;
    /** @var string */
    private $friday;
    /** @var string */
    private $saturday;
    /** @var string */
    private $sunday;
    /** @var string */
    private $breakTime;

}