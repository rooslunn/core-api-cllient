<?php

namespace Comment;

use Pilulka\CoreApiClient\Command\Comment\DeleteComment;
use Pilulka\CoreApiClient\JsonApiClient;

class DeleteCommentTest extends \Codeception\Test\Unit
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
    public function testDeleteComment(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new DeleteComment(1));

        $this->assertTrue($response->result);
    }
}