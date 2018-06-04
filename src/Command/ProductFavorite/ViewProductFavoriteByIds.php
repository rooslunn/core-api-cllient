<?php

namespace Pilulka\CoreApiClient\Command\ProductFavorite;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductFavoriteByIds implements Request
{
    private const URI = '/favorite/byids';

    /** @var int */
    private $userId;

    /** @var array */
    private $ids;

    /**
     * ViewProductFavoriteByIds constructor.
     * @param int $userId
     * @param array $ids
     */
    public function __construct(int $userId, array $ids)
    {
        $this->userId = $userId;
        $this->ids = $ids;
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
        return self::URI . '?' . http_build_query(['userId' => $this->userId, 'id' => $this->ids]);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}
