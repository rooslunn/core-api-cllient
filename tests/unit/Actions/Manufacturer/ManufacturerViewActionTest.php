<?php
namespace Actions\Manufacturer;

use Pilulka\CoreApi\Client\Action\Manufacturer\View\{
    ManufacturerViewRequest as ManufacturerViewRequest,
    ManufacturerViewAction as ManufacturerViewAction
};

class ManufacturerViewActionTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testAction()
    {
        $response = (new ManufacturerViewAction())->execute(['id' => '1']);
        $this->assertEquals(200, $response->getStatusCode());
    }
}