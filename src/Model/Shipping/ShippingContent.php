<?php


namespace Pilulka\CoreApiClient\Model\Shipping;

class ShippingContent
{
    /** @var  string|null */
    private $long;

    /** @var  string|null */
    private $short;

    /**
     * @return null|string
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param null|string $long
     * @return ShippingContent
     */
    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * @param null|string $short
     * @return ShippingContent
     */
    public function setShort($short)
    {
        $this->short = $short;
        return $this;
    }
}
