<?php

namespace Pilulka\CoreApiClient\Command\Comment;

use JsonMapper;
use Pilulka\CoreApiClient\Model\Comment\Comment;
use Pilulka\CoreApiClient\Response\Response;

class ViewCommentsResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    public function __construct($arrayResult)
    {
        $this->objectResult = $arrayResult;
    }

    public function result(): bool
    {
        return $this->objectResult->totsl ? true : false;
    }

    /**
     * @return array
     * @throws \JsonMapper_Exception
     */
    public function toModel(): array
    {
        $result['total'] = $this->objectResult->total;

        $mapper = new JsonMapper();

        foreach ($this->objectResult->comments as $comment) {
            $result['comments'][] = $mapper->map($comment, new Comment());
        }

        return $result;

    }
}