<?php

namespace Pilulka\CoreApiClient\Command\Category;

use Pilulka\CoreApiClient\Model\Category\Category;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class DeleteCategory implements Request
{
    private const url = '/category';

    /** @var Category */
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
        return Http::DELETE;
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