<?php

namespace User;

use Pilulka\CoreApiClient\Command\User\UpdateUser;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\User\User;
use Pilulka\CoreApiClient\Tests\utils\UserUtility;

class UpdateUserTest extends Unit
{
    /**
     * @var User
     */
    private $user;

    protected function _before()
    {
        $this->user = $this->createUser();
    }

    protected function _after()
    {
    }

    /**
     * @group User
     * @throws \Exception
     */
    public function testUpdateUser(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new UpdateUser($this->user, 123));

        $this->assertTrue($response->result);
        $this->assertEquals(123, $response->userId);
    }

    /**
     * @return User
     */
    private function createUser(): User
    {
        return UserUtility::createUser();
    }
}
