<?php

namespace Pilulka\CoreApiClient\Model\Manufacturer;

use Pilulka\CoreApiClient\Model\JsonModel;

class Manufacturer extends JsonModel
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  ManufacturerContent */
    private $content;

}