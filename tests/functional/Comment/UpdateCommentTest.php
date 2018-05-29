<?php

namespace Comment;

use Pilulka\CoreApiClient\Command\Comment\UpdateComment;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Comment\Comment;

class UpdateCommentTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /*
     * @group Comment
     */
    public function testUpdateComment(): void
    {
        $comment = $this->createMock(Comment::class);
        $comment->method('getId')
            ->willReturn(1);


        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new UpdateComment($comment));

        $this->assertTrue($response->result);
    }
}