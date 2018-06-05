<?php

namespace Zasilkovna;

use Pilulka\CoreApiClient\Command\Zasilkovna\CreateZasilkovna;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Zasilkovna\Zasilkovna;

class CreateZasilkovnaTest extends Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @throws \Exception
     */
    public function testCreateZasilkovna(): void
    {
        $zasilkovna = (new Zasilkovna());

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateZasilkovna($zasilkovna));

        $this->assertTrue($response->result);
        $this->assertEquals(5, $response->zasilkovna);
    }
}
