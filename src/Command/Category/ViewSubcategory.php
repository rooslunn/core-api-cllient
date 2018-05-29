<?php

namespace Pilulka\CoreApiClient\Command\Category;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewSubcategory implements Request
{
    private const url = '/category/parent';

    /** @var int */
    private $categoryId;

    /**
     * @param int $categoryId
     */
    public function __construct(int $categoryId)
    {
        $this->categoryId = $categoryId;
    }


    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::GET;
    }


    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::url . '/' . $this->categoryId;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}