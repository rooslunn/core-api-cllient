<?php
namespace Helpers;

class PropagateParamsFunctionTest extends \Codeception\Test\Unit
{
    use \Codeception\Specify;

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
    public function testFunction()
    {
        $url = 'http://domain.com/action/{param}';

        $this->specify('url have param, param provided', function () use ($url) {
            $params = ['param' => '1'];
            $expected = 'http://domain.com/action/1';
            $actual = propagate_params($url, $params);
            $this->assertEquals($expected, $actual);
        });
    }
}