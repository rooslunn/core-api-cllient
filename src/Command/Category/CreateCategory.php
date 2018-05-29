<?php

namespace Pilulka\CoreApiClient\Command\Category;

use Pilulka\CoreApiClient\Model\Category\Category;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateCategory implements Request
{
    private const url = '/category';

    /** @var Category */
    private $category;

    /**
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }


    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::PUT;
    }


    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::url;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        $category = $this->category;
        $arrForJson = [
            'id' => $category->id,
            'name' => $category->name,
            'parentId' => $category->parentId,
            'position' => $category->position,
            'content' => $category->content,
            'isActive' => $category->isActive,
            'isDeleted' => $category->isDeleted,
            'image' => $category->image,
            'inMainMenu' => $category->inMainMenu,
            'filtes' => $category->filters,
        ];
        return \GuzzleHttp\json_encode($arrForJson);
    }
}