<?php

namespace Brand;

use Pilulka\CoreApiClient\Command\Brand\ViewBrand;
use Pilulka\CoreApiClient\JsonApiClient;

class ViewBrandTest extends \Codeception\Test\Unit
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
    public function testViewBrand()
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(
              new ViewBrand([
                  'id' => 1
              ])
            );

        $this->assertArrayHasKey('id', $response, "doesn't have id key");
    }

}