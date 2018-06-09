<?php

namespace User;

use Pilulka\CoreApiClient\Command\User\ViewUserByEmailPassword;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\User\User;

class ViewUserByEmailPasswordTest extends Unit
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
    public function testViewUserByEmailPassword(): void
    {
        $password = '123456';
        $email = 'user@test.cz';
        $fields = '';

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewUserByEmailPassword($password, $email, $fields));

        $this->assertInstanceOf(User::class, $response);
    }
}
