<?php

namespace Brand;

use Pilulka\CoreApiClient\Command\Brand\CreateBrand;
use Pilulka\CoreApiClient\JsonApiClient;

class CreateBrandTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCreateBrand()
    {
        $response = (new JsonApiClient())
            ->send(
                new CreateBrand([
                    'id' => 1,
                    'name' => 'Test Brand',
                ])
            );

        $this->assertArrayHasKey('result', $response);
        $this->assertTrue($response['result']);
    }
}