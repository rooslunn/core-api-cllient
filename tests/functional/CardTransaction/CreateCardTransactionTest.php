<?php
namespace CardTransaction;

use Pilulka\CoreApiClient\Command\CardTransaction\CreateCardTransaction;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\CardTransaction\CardTransaction;

class CreateCardTransactionTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests

    /**
     * @throws \ReflectionException
     */
    public function testCreateTransaction(): void
    {
        $cardTransaction = $this->createMock(CardTransaction::class);
        $cardTransaction->method('getId')
            ->willReturn(1);


        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateCardTransaction($cardTransaction));

        $this->assertTrue($response->result);
    }
}