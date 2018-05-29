<?php


namespace Pilulka\CoreApiClient\Model\Zasilkovna;

class ZasilkovnaPhoto
{
    /** @var string */
    private $thumbnail;
    /** @var string */
    private $normal;

    /**
     * @return string
     */
    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     * @return ZasilkovnaPhoto
     */
    public function setThumbnail(string $thumbnail): ZasilkovnaPhoto
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * @return string
     */
    public function getNormal(): string
    {
        return $this->normal;
    }

    /**
     * @param string $normal
     * @return ZasilkovnaPhoto
     */
    public function setNormal(string $normal): ZasilkovnaPhoto
    {
        $this->normal = $normal;
        return $this;
    }
}
