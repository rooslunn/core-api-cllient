<?php

namespace Zasilkovna;

use Pilulka\CoreApiClient\Command\Zasilkovna\CreateZasilkovna;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Zasilkovna\Zasilkovna;
use Pilulka\CoreApiClient\Tests\utils\ZasilkovnaUtility;

class CreateZasilkovnaTest extends Unit
{
    /**
     * @var Zasilkovna
     */
    private $zasilkovna;

    protected function _before()
    {
        $this->zasilkovna = $this->createZasilkovna();
    }

    protected function _after()
    {
    }

    /**
     * @throws \Exception
     */
    public function testCreateZasilkovna(): void
    {
        $zasilkovna = $this->createZasilkovna();

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateZasilkovna($zasilkovna));

        $this->assertTrue($response->result);
        $this->assertEquals(5, $response->zasilkovna);
    }

    /**
     * @return Zasilkovna
     */
    private function createZasilkovna(): Zasilkovna
    {
        return ZasilkovnaUtility::createZasilkovna();
    }
}
