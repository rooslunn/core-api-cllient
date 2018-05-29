<?php

namespace Pilulka\CoreApiClient\Model\Category;

use Pilulka\CoreApiClient\Model\JsonModel;

class Category extends JsonModel
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  int|null */
    private $parentId;

    /** @var  int */
    private $position;

    /** @var  CategoryContent */
    private $content;

    /** @var  bool */
    private $isActive;

    /** @var  bool */
    private $isDeleted;

    /** @var  string */
    private $image;

    /** @var boolean */
    private $inMainMenu;

    /** @var CategoryFilter[]|null */
    private $filters;

    /** @var CategoryFrontendArticle[] */
    private $frontendArticles;

}
