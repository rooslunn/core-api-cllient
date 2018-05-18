<?php
namespace Actions\Manufacturer;

use function Pilulka\CoreApi\Client\Helpers\core_api_action;
use Pilulka\CoreApi\Client\Action\Manufacturer\Create\ManufacturerCreateAction;

class ManufacturerCreateActionTest extends \Codeception\Test\Unit
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
        /* @var $response \Pilulka\CoreApi\Client\Contract\ApiResponse */
        $response = core_api_action(ManufacturerCreateAction::class, [
            'id' => '2',
            'name' => 'Manufacture Test',
            'content' => 'Manufacture Content Test',
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($response->getJson());
    }
}