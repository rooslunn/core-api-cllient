<?php

namespace Pilulka\CoreApiClient\Command\Comment;

use Pilulka\CoreApiClient\Model\Comment\Comment;
use Pilulka\CoreApiClient\Model\Comment\Comments;
use Pilulka\CoreApiClient\Model\JsonModel;
use Pilulka\CoreApiClient\Response\Response;

class ViewCommentsResponse implements Response
{
    /**
     * @var array
     */
    private $arrayResult;

    public function __construct(array $arrayResult)
    {
        $this->arrayResult = $arrayResult;
    }

    public function result(): bool
    {
        return $this->arrayResult['totsl'] ? true : false;
    }

    /**
     * @return array
     */
    public function toObject(): array
    {
        return $this->arrayResult;
    }

    /**
     * @return JsonModel
     */
    public function toModel(): JsonModel
    {
        $comments = new Comments($this->arrayResult);

        $comments->comments = array_map(function ($comment) {
            return new Comment($comment);
        }, $comments->comments);

        return $comments;
    }
}