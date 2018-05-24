<?php

namespace Pilulka\CoreApiClient\Command\Comment;

use Pilulka\CoreApiClient\Model\Comment;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class DeleteComment implements Request
{
    private const uri = '/comment';

    /** @var int */
    private $commentId;

    public function __construct(int $commentId)
    {
        $this->commentId = $commentId;
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
        return self::uri . '/' . $this->commentId;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}