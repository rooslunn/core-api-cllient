<?php

use function Pilulka\CoreApi\Client\Helpers\config;

class ConfigHelperTest extends \Codeception\Test\Unit
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
    public function testConfigHelper()
    {
        $this->specify('config exists, key exists', function () {
            $value = config('test_url', 'app');
            $this->assertNotNull($value);
        });

        $this->specify('config exists, key not', function () {
            $value = config('test_url14', 'app');
            $this->assertNull($value);
        });

        $this->specify('config exists, key not, use default', function () {
            $value = config('test_url14', 'app', 'test_url14');
            $this->assertEquals($value, 'test_url14');
        });

        $this->specify('default config is app', function () {
            $value = config('test_url');
            $this->assertNotNull($value);
        });
    }
}