<?php

namespace Pilulka\CoreApiClient\Command\Card;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewCard implements Request
{
    private const url = '/card';

    /** @var int */
    private $userId;

    /**
     * GetBrand constructor.
     * @param int $userId
     */
    public function __construct(int $userId)
    {
        $this->userId = $userId;
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
        return self::url . '/' . $this->userId;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}