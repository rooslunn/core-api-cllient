<?php

namespace Pilulka\CoreApiClient\Model\ProductParamGroup;

/**
 * Class ProductParamGroup
 * @package Pilulka\CoreApiClient\Model\ProductParamGroup
 */
class ProductParamGroup
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
     * @return ProductParamGroup
     */
    public function setId(int $id): ProductParamGroup
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
     * @return ProductParamGroup
     */
    public function setName(string $name): ProductParamGroup
    {
        $this->name = $name;
        return $this;
    }
}
