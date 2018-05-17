<?php

use Pilulka\CoreApi\Client\Action\Base\{
    BaseAction, BaseActionRequest
};

class BaseActionTest extends \Codeception\Test\Unit
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
    public function testBaseAction(): void
    {
        $request = new BaseActionRequest('GET', config('test_url'));
        $response = (new BaseAction())->execute($request);
        $this->assertEquals(200, $response->getStatusCode());
    }
}