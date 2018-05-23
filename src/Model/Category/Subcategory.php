<?php

namespace Pilulka\CoreApiClient\Model\Category;

use Pilulka\CoreApiClient\Model\JsonModel;

class Subcategory extends JsonModel
{
    /** @var int  */
    private $totsl;

    /** @var Category[] */
    private $categories;

}