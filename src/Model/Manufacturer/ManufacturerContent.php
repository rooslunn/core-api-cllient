<?php


namespace Pilulka\CoreApiClient\Model\Manufacturer;


class ManufacturerContent
{
    /** @var  string|null */
    private $long;

    /**
     * @return null|string
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param null|string $long
     * @return ManufacturerContent
     */
    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }

}