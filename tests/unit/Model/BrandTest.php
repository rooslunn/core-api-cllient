<?php
namespace Model;


use Pilulka\CoreApiClient\Model\Brand\Brand;

class BrandTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests

    /**
     * @throws \ReflectionException
     */
    public function testBrandModel(): void
    {
        $brand =$this->createMock(Brand::class);
        $this->assertInstanceOf(Brand::class, $brand);
    }
}