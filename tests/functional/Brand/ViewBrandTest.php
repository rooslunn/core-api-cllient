<?php

namespace Brand;

use Pilulka\CoreApiClient\Command\Brand\ViewBrand;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Brand;

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
        /** @var Brand $brand */
        $brand = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewBrand(1));

        $this->assertEquals(1, $brand->getId());
    }

}