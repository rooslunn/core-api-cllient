<?php
namespace Card;

use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Command\Card\CreateCard;
use Pilulka\CoreApiClient\Model\Card\Card;

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
        $card = (new Card())->setUserId(1)
            ->setIsVip(false)
            ->setCredits(0)
            ->setCards(
                ['223322', '322223']
            );

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateCard($card));

        $this->assertTrue($response->result);
    }
}