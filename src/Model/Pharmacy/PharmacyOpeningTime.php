<?php

namespace Pilulka\CoreApiClient\Model\Pharmacy;

class PharmacyOpeningTime
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
     */
    public function setMonday(string $monday)
    {
        $this->monday = $monday;
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
     */
    public function setTuesday(string $tuesday)
    {
        $this->tuesday = $tuesday;
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
     */
    public function setWednesday(string $wednesday)
    {
        $this->wednesday = $wednesday;
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
     */
    public function setThursday(string $thursday)
    {
        $this->thursday = $thursday;
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
     */
    public function setFriday(string $friday)
    {
        $this->friday = $friday;
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
     */
    public function setSaturday(string $saturday)
    {
        $this->saturday = $saturday;
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
     */
    public function setSunday(string $sunday)
    {
        $this->sunday = $sunday;
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
     */
    public function setBreakTime(string $breakTime)
    {
        $this->breakTime = $breakTime;
    }

}