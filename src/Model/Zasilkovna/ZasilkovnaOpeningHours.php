<?php


namespace Pilulka\CoreApiClient\Model\Zasilkovna;


class ZasilkovnaOpeningHours
{
    /** @var string */
    private $compactShort;
    /** @var string */
    private $compactLong;
    /** @var string */
    private $tableLong;

    /**
     * @return string
     */
    public function getCompactShort(): string
    {
        return $this->compactShort;
    }

    /**
     * @param string $compactShort
     * @return ZasilkovnaOpeningHours
     */
    public function setCompactShort(string $compactShort): ZasilkovnaOpeningHours
    {
        $this->compactShort = $compactShort;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompactLong(): string
    {
        return $this->compactLong;
    }

    /**
     * @param string $compactLong
     * @return ZasilkovnaOpeningHours
     */
    public function setCompactLong(string $compactLong): ZasilkovnaOpeningHours
    {
        $this->compactLong = $compactLong;
        return $this;
    }

    /**
     * @return string
     */
    public function getTableLong(): string
    {
        return $this->tableLong;
    }

    /**
     * @param string $tableLong
     * @return ZasilkovnaOpeningHours
     */
    public function setTableLong(string $tableLong): ZasilkovnaOpeningHours
    {
        $this->tableLong = $tableLong;
        return $this;
    }


}