<?php

namespace Comment;

use Pilulka\CoreApiClient\Command\Comment\ViewRatingCounts;
use Pilulka\CoreApiClient\JsonApiClient;

class ViewRatingCountsTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /*
     * @group RatingCounts
     */
    public function testViewRatingCounts(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewRatingCounts(1, 1));

        $this->assertInternalType('array', $response);
    }
}