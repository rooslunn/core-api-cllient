<?php

namespace Pilulka\CoreApiClient\Command\Category;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewSubcategoryIds implements Request
{
    private const url = '/category/parent/ids';

    /** @var int */
    private $parentId;

    /**
     * @param int $parentId
     */
    public function __construct(int $parentId)
    {
        $this->parentId = $parentId;
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
        return self::url . '/' . $this->parentId;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}