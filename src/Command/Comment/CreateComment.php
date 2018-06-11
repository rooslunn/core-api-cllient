<?php

namespace Pilulka\CoreApiClient\Command\Comment;

use Pilulka\CoreApiClient\Model\Comment\Comment;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateComment implements Request
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
        return Http::PUT;
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
        return \GuzzleHttp\json_encode([
            'id' => $this->comment->getId(),
            'type' => $this->comment->getType(),
            'objectId' => $this->comment->getObjectId(),
            'userId' => $this->comment->getUserId(),
            'name' => $this->comment->getName(),
            'email' => $this->comment->getEmail(),
            'content' => [
                'long' => $this->comment->getContent()->getLong(),
            ],
            'rating' => $this->comment->getRating(),
            'ip' => $this->comment->getIp(),
        ]);
    }
}
