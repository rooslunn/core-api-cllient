<?php
namespace CardTransaction;

use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Command\CardTransaction\ViewCardTransaction;

class ViewCardTransactionTest extends \Codeception\Test\Unit
{
    const USER_ID = 107219;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testViewCardTransaction(): void
    {
        $cardTransactions = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewCardTransaction($userId = self::USER_ID));

        $this->assertEquals(self::USER_ID, $cardTransactions[0]->userId);
    }
}