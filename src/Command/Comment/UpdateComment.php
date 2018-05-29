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
            'id' => $comment->getId(),
            'type' => $comment->getType(),
            'objectId' => $comment->getObjectId(),
            'userId' => $comment->getUserId(),
            'name' => $comment->getName(),
            'email' => $comment->getEmail(),
            'content' => $comment->getContent(),
            'rating' => $comment->getRating(),
            'ip' => $comment->getId(),
        ]);
    }
}