<?php
namespace Card;

use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Command\Card\ViewCard;
use Pilulka\CoreApiClient\Model\Card\Card;

class ViewCardTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testViewCard()
    {
        /** @var Card $card */
        $card = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewCard($userId = 1));

        $this->assertEquals(1, $card->getUserId());
    }
}