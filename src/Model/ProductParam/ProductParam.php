<?php

namespace Pilulka\CoreApiClient\Model\ProductParam;

class ProductParam
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  string */
    private $value;

    /** @var  int */
    private $paramGroupId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ProductParam
     */
    public function setId(int $id): ProductParam
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
     * @return ProductParam
     */
    public function setName(string $name): ProductParam
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return ProductParam
     */
    public function setValue(string $value): ProductParam
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getParamGroupId(): int
    {
        return $this->paramGroupId;
    }

    /**
     * @param int $paramGroupId
     * @return ProductParam
     */
    public function setParamGroupId(int $paramGroupId): ProductParam
    {
        $this->paramGroupId = $paramGroupId;
        return $this;
    }


}