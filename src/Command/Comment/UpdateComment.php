<?php

namespace Pilulka\CoreApiClient\Command\Comment;

use Pilulka\CoreApiClient\Model\Comment\Comment;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class UpdateComment implements Request
{
    private const url = '/comment';

    /** @var Comment */
    private $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::POST;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::url;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        $comment = $this->comment;
        return \GuzzleHttp\json_encode([
            'id' => $comment->id,
            'type' => $comment->type,
            'objectId' => $comment->objectId,
            'userId' => $comment->userId,
            'name' => $comment->name,
            'email' => $comment->email,
            'content' => $comment->content,
            'rating' => $comment->rating,
            'ip' => $comment->ip,
        ]);
    }
}