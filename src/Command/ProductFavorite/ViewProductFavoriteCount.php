<?php

namespace Pilulka\CoreApiClient\Command\ProductFavorite;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductFavoriteCount implements Request
{
    private const URI = '/favorite/count';

    /** @var int */
    private $userId;

    /**
     * ViewProductFavoriteCount constructor.
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
        return self::URI . "?userId={$this->userId}";
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}
