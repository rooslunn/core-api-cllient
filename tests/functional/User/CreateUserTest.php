<?php

namespace User;

use Pilulka\CoreApiClient\Command\User\CreateUser;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\User\User;

class CreateUserTest extends Unit
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
    public function testCreateUser(): void
    {
        $user = new User();
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateUser($user));

        $this->assertTrue($response->result);
        $this->assertEquals(123, $response->userId);
    }
}
