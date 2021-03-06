<?php

namespace Pilulka\CoreApiClient\Model\Brand;

/**
 * Class Brand
 * @package Pilulka\CoreApiClient\Model\Brand
 */
class Brand
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Brand
     */
    public function setId(int $id): Brand
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
     * @return Brand
     */
    public function setName(string $name): Brand
    {
        $this->name = $name;
        return $this;
    }
}
