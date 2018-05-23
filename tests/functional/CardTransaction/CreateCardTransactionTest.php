<?php
namespace CardTransaction;

use Pilulka\CoreApiClient\Command\CardTransaction\CreateCardTransaction;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\CardTransaction;

class CreateCardTransactionTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCreateTransaction(): void
    {
        $cardTransaction = new CardTransaction([
            'id' => 3719525,
            'userId' => 107219,
            'time' => 1418932333,
            'credits' => -14.14,
            'orderNumber' => null,
        ]);
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateCardTransaction($cardTransaction));

        $this->assertTrue($response->result);
    }
}