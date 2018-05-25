<?php


namespace Pilulka\CoreApiClient\Model\Pharmacy;


use Pilulka\CoreApiClient\Model\JsonModel;

class PharmacyList extends JsonModel
{
    /** @var int */
    private $total;

    /** @var Pharmacy */
    private $pharmacy;

}