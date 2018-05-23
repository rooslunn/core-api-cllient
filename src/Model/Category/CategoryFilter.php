<?php

namespace Pilulka\CoreApiClient\Model\Category;

use Pilulka\CoreApiClient\Model\JsonModel;

class CategoryFilter extends JsonModel
{
    const TYPE_PARAM_GROUP = 0;
    const TYPE_ZNACKA = 1;
    const TYPE_PRODUCT_LINE = 2;

    /** @var int */
    private $paramId;
    /** @var int */
    private $sort;
    /** @var int */
    private $type;

    /**
     * @return int
     */
    public function getParamId(): int
    {
        return $this->paramId;
    }

    /**
     * @param int $paramId
     * @return CategoryFilter
     */
    public function setParamId(int $paramId): CategoryFilter
    {
        $this->paramId = $paramId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSort(): int
    {
        return $this->sort;
    }

    /**
     * @param int $sort
     * @return CategoryFilter
     */
    public function setSort(int $sort): CategoryFilter
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return CategoryFilter
     */
    public function setType(int $type): CategoryFilter
    {
        $this->type = $type;
        return $this;
    }

}