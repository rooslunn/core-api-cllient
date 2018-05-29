<?php

namespace Brand;

use Pilulka\CoreApiClient\Command\Brand\CreateBrand;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Brand\Brand;

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
        $newBrand = (new Brand())->setId(1)->setName('test');
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateBrand($newBrand));

        $this->assertTrue($response->result);
    }
}