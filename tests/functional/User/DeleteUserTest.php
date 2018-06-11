<?php

namespace User;

use Pilulka\CoreApiClient\Command\ProductFavorite\CreateProductFavorite;
use Pilulka\CoreApiClient\Command\ProductFavorite\DeleteProductFavorite;
use Pilulka\CoreApiClient\Command\User\DeleteUser;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;

class DeleteUserTest extends Unit
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
    public function testDeleteUser(): void
    {
        $id = 1;
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new DeleteUser($id));

        $this->assertTrue($response->result);
    }
}
