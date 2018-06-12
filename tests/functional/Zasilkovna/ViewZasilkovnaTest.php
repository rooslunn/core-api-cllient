<?php

namespace Zasilkovna;

use Pilulka\CoreApiClient\Command\Zasilkovna\ViewZasilkovna;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Location\Location;
use Pilulka\CoreApiClient\Model\Zasilkovna\Zasilkovna;
use Pilulka\CoreApiClient\Model\Zasilkovna\ZasilkovnaOpeningHours;
use Pilulka\CoreApiClient\Model\Zasilkovna\ZasilkovnaOpeningTime;
use Pilulka\CoreApiClient\Model\Zasilkovna\ZasilkovnaPhoto;

class ViewZasilkovnaTest extends Unit
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
    public function testViewZasilkovna(): void
    {
        $id = 5;
        /**
         * @var Zasilkovna $response
         */
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewZasilkovna($id));

        $this->assertInstanceOf(Zasilkovna::class, $response);
    }
}
