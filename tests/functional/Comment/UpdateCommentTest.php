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
        $comment = new Comment([
            'id' => 1,
            'type' => 1,
            'objectId' => 1,
            'userId' => 10,
            'name' => 'Comment name',
            'email' => 'email@test.com',
            'content' => ['long' => 'Very Long Text'],
            'rating' => 5,
            'ip' => '192.168.1.14',
        ]);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new UpdateComment($comment));

        $this->assertTrue($response->result);
    }
}