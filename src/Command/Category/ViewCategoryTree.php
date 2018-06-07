<?php

namespace Pilulka\CoreApiClient\Command\Category;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewCategoryTree implements Request
{
    private const url = '/category/tree';

    /** @var int */
    private $parentId;
    /**
     * @var int
     */
    private $level;

    /**
     * @param int $parentId
     * @param int $level
     */
    public function __construct(int $parentId, int $level)
    {
        $this->parentId = $parentId;
        $this->level = $level;
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
        return self::url . '/' . $this->parentId.'/'.$this->level;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}