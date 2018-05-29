<?php

namespace Pilulka\CoreApiClient\Model\Pharmacy;

class PharmacyLocation
{
    /** @var  float */
    private $lat;

    /** @var  float */
    private $lon;

    /**
     * @return float
     */
    public function getLat(): ?float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     */
    public function setLat(float $lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return float
     */
    public function getLon(): ?float
    {
        return $this->lon;
    }

    /**
     * @param float $lon
     */
    public function setLon(float $lon)
    {
        $this->lon = $lon;
    }
}