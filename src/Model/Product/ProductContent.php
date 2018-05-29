<?php

namespace Pilulka\CoreApiClient\Model\Product;

/**
 * Class ProductContent
 * @package Pilulka\CoreApi\Domain\Model\Product
 */
class ProductContent
{
    private $short;
    /** @var string|null */
    private $long;
    /** @var  string|null */
    private $spc;
    /** @var  string|null */
    private $gift;
    /** @var  ProductFile[]|null */
    private $files;

    /**
     * @return null|string
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * @param null|string $short
     *
     * @return ProductContent
     */
    public function setShort($short)
    {
        $this->short = $short;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param null|string $long
     *
     * @return ProductContent
     */
    public function setLong($long)
    {
        $this->long = $long;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSpc()
    {
        return $this->spc;
    }

    /**
     * @param null|string $spc
     *
     * @return ProductContent
     */
    public function setSpc($spc)
    {
        $this->spc = $spc;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * @param null|string $gift
     *
     * @return ProductContent
     */
    public function setGift($gift)
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * @param int $type
     *
     * @return array
     */
    public function filesOfType(int $type)
    {
        return array_filter(
            $this->getFiles(),
            function (ProductFile $file) use ($type) {
                return $file->getType() == $type;
            }
        );
    }

    /**
     * @return null|ProductFile[]
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param null|ProductFile[] $files
     *
     * @return ProductContent
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }
}
