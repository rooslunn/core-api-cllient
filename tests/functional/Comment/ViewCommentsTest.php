<?php

namespace Comments;

use Pilulka\CoreApiClient\Command\Comment\ViewComments;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Comment\{Comment, Comments, CommentTypes};

class ViewCommentsTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /*
     * @group Comments
     */
    public function testViewComments(): void
    {
        $command = new ViewComments(
            CommentTypes::COMMENT_TYPE_PRODUCT, $objectId=1
        );
        $comments = (new JsonApiClient(CORE_API_URL_BASE))
            ->send($command);

        $this->assertInstanceOf(Comments::class, $comments);
        $this->assertInstanceOf(Comment::class, $comments->comments[0]);
    }
}