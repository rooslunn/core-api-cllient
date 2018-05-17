<?php
namespace Actions\Manufacturer;

use function Pilulka\CoreApi\Client\Helpers\action;
use Pilulka\CoreApi\Client\Action\Manufacturer\View\ManufacturerViewAction;

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
        $response = action(ManufacturerViewAction::class, ['id' => '1']);
        $this->assertEquals(200, $response->getStatusCode());
    }
}