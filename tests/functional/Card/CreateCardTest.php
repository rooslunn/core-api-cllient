<?php
namespace Card;

use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Card;
use Pilulka\CoreApiClient\Command\Card\CreateCard;

class CreateCardTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCreateCard(): void
    {
        $card = new Card([
            'userId' => 1,
            'isVip' => true,
            'credits' => 1000.99,
            'cards' => ['223322', '322223'],
        ]);
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateCard($card));

        $this->assertTrue($response->result);
    }
}