<?php
namespace Model;

use Pilulka\CoreApiClient\Model\Brand;

class BrandTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testBrandModel(): void
    {
        $brand = new Brand([
            'id' => 1,
            'name' => 'BrandTest',
        ]);
        $this->assertEquals(1, $brand->id);
    }
}