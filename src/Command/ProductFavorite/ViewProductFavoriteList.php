<?php

namespace Pilulka\CoreApiClient\Command\ProductFavorite;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductFavoriteList implements Request
{
    private const URI = '/favorite/list';

    /** @var int */
    private $userId;
    /** @var int  */
    private $from = 0;
    /** @var int  */
    private $size = 30;

    /**
     * ViewProductFavouriteList constructor.
     * @param int $userId
     * @param int $from
     * @param int $size
     */
    public function __construct(int $userId, int $from = 0, int $size = 30)
    {
        $this->userId = $userId;
        $this->from = $from;
        $this->size = $size;
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
        return self::URI . "?userId={$this->userId}&from={$this->from}&size={$this->size}";
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
}
