<?php

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
     * @throws Exception
     */
    public function testViewBrand()
    {
        $response = (new JsonApiClient())
            ->send(
              new ViewBrand([
                  'id' => 1
              ])
            );

        $this->assertArrayHasKey('id', $response, 1);
    }

}