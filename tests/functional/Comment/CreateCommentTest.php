<?php

namespace Comment;

use Pilulka\CoreApiClient\Command\Comment\CreateComment;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Comment\Comment;

class CreateCommentTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @throws \ReflectionException
     */
    public function testCreateComment(): void
    {
        $comment = $this->createMock(Comment::class);
        $comment->method('getId')
            ->willReturn(1);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateComment($comment));

        $this->assertTrue($response->result);
    }
}