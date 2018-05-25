<?php

namespace Pilulka\CoreApiClient\Model\Pharmacy;

use Pilulka\CoreApiClient\Model\JsonModel;

class PharmacyContact extends JsonModel
{
    /** @var string */
    private $street;
    /** @var string */
    private $house_number;
    /** @var string */
    private $city;
    /** @var string */
    private $zip;
    /** @var string */
    private $phone;
    /** @var string */
    private $mobile;
    /** @var string */
    private $fax;
    /** @var string */
    private $email;

}