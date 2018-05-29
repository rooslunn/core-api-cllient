<?php

namespace Pilulka\CoreApiClient\Model\ProductLine;

class ProductLine
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  int */
    private $brandId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ProductLine
     */
    public function setId(int $id): ProductLine
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ProductLine
     */
    public function setName(string $name): ProductLine
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandId(): int
    {
        return $this->brandId;
    }

    /**
     * @param int $brandId
     * @return ProductLine
     */
    public function setBrandId(int $brandId): ProductLine
    {
        $this->brandId = $brandId;
        return $this;
    }

}