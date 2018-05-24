<?php

namespace Comment;

use Pilulka\CoreApiClient\Command\Comment\CreateComment;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Comment;

class CreateCommentTest extends \Codeception\Test\Unit
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
    public function testCreateComment(): void
    {
        $comment = new Comment([
            'id' => 1,
            'name' => 'Comment name',
        ]);

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateComment($comment));

        $this->assertTrue($response->result);
    }
}