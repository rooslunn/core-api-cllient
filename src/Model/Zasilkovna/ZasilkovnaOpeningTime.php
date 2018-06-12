<?php

namespace Pilulka\CoreApiClient\Model\Zasilkovna;

class ZasilkovnaOpeningTime
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

    /**
     * @return string
     */
    public function getMonday(): string
    {
        return $this->monday;
    }

    /**
     * @param string $monday
     * @return ZasilkovnaOpeningTime
     */
    public function setMonday(string $monday)
    {
        $this->monday = $monday;
        return $this;
    }

    /**
     * @return string
     */
    public function getTuesday(): string
    {
        return $this->tuesday;
    }

    /**
     * @param string $tuesday
     * @return ZasilkovnaOpeningTime
     */
    public function setTuesday(string $tuesday)
    {
        $this->tuesday = $tuesday;
        return $this;
    }

    /**
     * @return string
     */
    public function getWednesday(): string
    {
        return $this->wednesday;
    }

    /**
     * @param string $wednesday
     * @return ZasilkovnaOpeningTime
     */
    public function setWednesday(string $wednesday)
    {
        $this->wednesday = $wednesday;
        return $this;
    }

    /**
     * @return string
     */
    public function getThursday(): string
    {
        return $this->thursday;
    }

    /**
     * @param string $thursday
     * @return ZasilkovnaOpeningTime
     */
    public function setThursday(string $thursday)
    {
        $this->thursday = $thursday;
        return $this;
    }

    /**
     * @return string
     */
    public function getFriday(): string
    {
        return $this->friday;
    }

    /**
     * @param string $friday
     * @return ZasilkovnaOpeningTime
     */
    public function setFriday(string $friday)
    {
        $this->friday = $friday;
        return $this;
    }

    /**
     * @return string
     */
    public function getSaturday(): string
    {
        return $this->saturday;
    }

    /**
     * @param string $saturday
     * @return ZasilkovnaOpeningTime
     */
    public function setSaturday(string $saturday)
    {
        $this->saturday = $saturday;
        return $this;
    }

    /**
     * @return string
     */
    public function getSunday(): string
    {
        return $this->sunday;
    }

    /**
     * @param string $sunday
     * @return ZasilkovnaOpeningTime
     */
    public function setSunday(string $sunday)
    {
        $this->sunday = $sunday;
        return $this;
    }

    /**
     * @return string
     */
    public function getBreakTime(): string
    {
        return $this->breakTime;
    }

    /**
     * @param string $breakTime
     * @return ZasilkovnaOpeningTime
     */
    public function setBreakTime(string $breakTime)
    {
        $this->breakTime = $breakTime;
        return $this;
    }

}