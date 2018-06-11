<?php

namespace Zasilkovna;

use Pilulka\CoreApiClient\Command\Zasilkovna\ViewZasilkovna;
use Pilulka\CoreApiClient\Command\Zasilkovna\ViewZasilkovnaList;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Location\Location;
use Pilulka\CoreApiClient\Model\Zasilkovna\Zasilkovna;
use Pilulka\CoreApiClient\Model\Zasilkovna\ZasilkovnaOpeningHours;
use Pilulka\CoreApiClient\Model\Zasilkovna\ZasilkovnaOpeningTime;
use Pilulka\CoreApiClient\Model\Zasilkovna\ZasilkovnaPhoto;

class ViewZasilkovnaListTest extends Unit
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
    public function testViewZasilkovnaList(): void
    {
        /**
         * @var Zasilkovna $response
         */
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewZasilkovnaList());

        $this->assertInternalType('array', $response);
        $this->assertTrue(count($response) > 0);

        $zasilkovnaToTest = $response[0];
        $this->assertInstanceOf(Zasilkovna::class, $zasilkovnaToTest);
        $this->assertInstanceOf(Location::class, $zasilkovnaToTest->getLocation());
        $this->assertInstanceOf(ZasilkovnaOpeningHours::class, $zasilkovnaToTest->getOpeningHours());
        $this->assertInstanceOf(ZasilkovnaOpeningTime::class, $zasilkovnaToTest->getOpeningTime());
    }
}
