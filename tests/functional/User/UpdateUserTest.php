<?php

namespace User;

use Pilulka\CoreApiClient\Command\User\UpdateUser;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\User\User;

class UpdateUserTest extends Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @throws \Exception
     */
    public function testUpdateUser(): void
    {
        $user = new User();
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new UpdateUser($user, 123));

        $this->assertTrue($response->result);
        $this->assertEquals(123, $response->userId);
    }
}
