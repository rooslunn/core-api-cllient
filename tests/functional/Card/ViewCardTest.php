<?php
namespace Card;

use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Command\Card\ViewCard;

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
        $card = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewCard($userId = 1));

        $this->assertEquals(1, $card->userId);
    }
}