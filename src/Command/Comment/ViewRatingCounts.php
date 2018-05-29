<?php

namespace Pilulka\CoreApiClient\Command\Comment;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewRatingCounts implements Request
{
    private const uri = '/comment/rating';

    /** @var int */
    private $type;

    /** @var int */
    private $objectId;

    public function __construct(int $type, int $objectId)
    {
        $this->objectId = $objectId;
        $this->type = $type;
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
        return self::uri . "/{$this->type}/{$this->objectId}";
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}