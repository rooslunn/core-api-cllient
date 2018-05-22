<?php
namespace Model;

use Pilulka\CoreApiClient\Model\Card;

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
        $brand = new Card([
            'id' => 1,
            'name' => 'BrandTest',
        ]);
        $this->assertEquals(1, $brand->id);
    }
}