<?php

namespace Product;

use Pilulka\CoreApiClient\Command\Product\ViewProductAvailabilityByIds;
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\Product\Product;

class ViewProductAvailabilityByIdsTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @group Product
     * @throws \Exception
     */
    public function testViewProductAvailabilityByIds(): void
    {
        $ids = [1, 2, 3];

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewProductAvailabilityByIds($ids));

        /**
         * @TODO Write test when mock-server will be upgraded
         */
        $this->assertTrue(false);
    }
}
