<?php

namespace User;

use Pilulka\CoreApiClient\Command\User\ViewUserByEmailPassword;
use Pilulka\CoreApiClient\Command\User\ViewUserByFilter;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\User\User;
use Pilulka\CoreApiClient\Model\User\UserFilterQuery;

class ViewUserByFilterTest extends Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @group User
     * @throws \Exception
     */
    public function testViewUserByFilter(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewUserByFilter(new UserFilterQuery()));

        $this->assertEquals(1, $response[0]->id);
    }
}
