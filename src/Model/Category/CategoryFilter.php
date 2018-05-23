<?php

namespace Pilulka\CoreApiClient\Model\Category;

use Pilulka\CoreApiClient\Model\JsonModel;

class CategoryFilter extends JsonModel
{
    public const TYPE_PARAM_GROUP = 0;
    public const TYPE_ZNACKA = 1;
    public const TYPE_PRODUCT_LINE = 2;

    /** @var int */
    private $paramId;

    /** @var int */
    private $sort;

    /** @var int */
    private $type;

}
