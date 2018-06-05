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

        $this->assertEquals(20, $response['total']);
        $this->assertInstanceOf(Zasilkovna::class, $response['zasilkovna'][0]);
        $this->assertInstanceOf(Location::class, $response['zasilkovna'][0]->getLocation());
        $this->assertInstanceOf(ZasilkovnaOpeningHours::class, $response['zasilkovna'][0]->getOpeningHours());
        $this->assertInstanceOf(ZasilkovnaOpeningTime::class, $response['zasilkovna'][0]->getOpeningTime());
    }
}
