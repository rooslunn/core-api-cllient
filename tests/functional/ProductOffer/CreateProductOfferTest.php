<?php

namespace ProductOffer;

use Pilulka\CoreApiClient\Command\ProductOffer\CreateProductOffer;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductOffer\ProductOffer;

class CreateProductOfferTest extends Unit
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
    public function testCreateProductOffer(): void
    {
        $productOffer = (new ProductOffer())
            ->setId(12)->setProductId(10)
            ->setStartDate(new \DateTime('@' . 12345678))->setStopDate(new \DateTime('@' . 12345678));

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateProductOffer($productOffer));

        $this->assertTrue($response->result);
        $this->assertEquals(12, $response->productOffer);
    }
}
