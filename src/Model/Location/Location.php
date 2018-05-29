<?php


namespace Pilulka\CoreApiClient\Model\Location;


class Location
{
    /** @var float */
    private $lat;
    /** @var float */
    private $lon;

    /**
     * @return float
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     * @return Location
     */
    public function setLat(float $lat): Location
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * @return float
     */
    public function getLon(): float
    {
        return $this->lon;
    }

    /**
     * @param float $lon
     * @return Location
     */
    public function setLon(float $lon): Location
    {
        $this->lon = $lon;
        return $this;
    }

}