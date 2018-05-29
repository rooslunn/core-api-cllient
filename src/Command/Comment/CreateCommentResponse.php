<?php

namespace Pilulka\CoreApiClient\Command\Comment;

use Pilulka\CoreApiClient\Response\Response;

class CreateCommentResponse implements Response
{
    /**
     * @var object
     */
    private $commentResult;

    public function __construct($arrayResult)
    {
        $this->commentResult = $arrayResult;
    }

    public function result(): bool
    {
        return $this->commentResult->result ?? false;
    }

    /**
     * @return object
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();
        return $result;
    }
}