<?php

namespace Shipping;

use Pilulka\CoreApiClient\Command\Shipping\CreateShipping;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\Shipping\Shipping;
use Pilulka\CoreApiClient\Model\Shipping\ShippingContent;

class CreateShippingTest extends Unit
{
    /**
     * @var Shipping
     */
    private $shipping;

    protected function _before()
    {
        $this->shipping = $this->createShipping();
    }

    protected function _after()
    {
    }

    /**
     * @throws \Exception
     */
    public function testCreateShipping(): void
    {
        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new CreateShipping($this->shipping));

        $this->assertTrue($response->result);
        $this->assertEquals(5, $response->shipping);
    }

    /**
     * @return Shipping
     */
    private function createShipping(): Shipping
    {
        $shipping = new Shipping();
        $content = (new ShippingContent())->setLong('')->setShort('');

        $shipping->setId(1);
        $shipping->setTitle('');
        $shipping->setContent($content);
        $shipping->setSort(1);
        $shipping->setType('');
        $shipping->setFee(1.2);
        $shipping->setIsActive(true);
        $shipping->setPays([]);


        return $shipping;
    }
}
