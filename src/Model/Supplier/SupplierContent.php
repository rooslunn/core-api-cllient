<?php


namespace Pilulka\CoreApiClient\Model\Supplier;

class SupplierContent
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
     * @return SupplierContent
     */
    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }
}
