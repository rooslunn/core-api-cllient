<?php

/*
 * Helpers
 */
function p($message) {
    echo $message . PHP_EOL;
}

function pl() {
    p(str_repeat('-', 14));
}

function fill(string $fileName, string $content) {
    if (is_writable($fileName)) {
        if (! $handle = fopen($fileName, 'w')) {
            p("E: Cannot open file ($fileName)");
            exit;
        }
        if (fwrite($handle, $content) === false) {
            p("E: Cannot wirte to file ($fileName)");
            exit;
        }
        p('Done');
        fclose($handle);
    } else {
        p("E: File is not writeable ($fileName)");
        exit;
    }
}

function usage() {
    p('Usage:');
    p('> php api-create.php model=<Model> action=<Command> method=<HTTP_VERB> uri=<API URI> <no-model> <run-test>');
}
/*
 * Start
 */
parse_str(implode('&', array_slice($argv, 1)), $_GET);
if (! array_key_exists('model', $_GET)
    || ! array_key_exists('action', $_GET)
    || ! array_key_exists('method', $_GET)
    || ! array_key_exists('uri', $_GET)) {
    usage();
    exit;
}

$model = $_GET['model'];
//[$subfolder, $model] = explode('/', $model);
//if ($model === null) {
//    [$model, $subfolder] = [$subfolder, null];
//}

$action = $_GET['action'];
$command = $action . $model;
$method = $_GET['method'];
$uri = $_GET['uri'];

$createModel = true;
if (array_key_exists('no-model', $_GET)) {
    $createModel = false;
}

p("Model: $model");
p("Action: $action");
p("Method: $method");
p("uri: $uri");
p("Command: {$command}");

/*
 * Model
 */
if ($createModel) {
    pl();
    p("Creating model ($model)...");
    $fileContent = <<<PHP
<?php

namespace Pilulka\CoreApiClient\Model;

class {$model} extends JsonModel
{
    /** @var  int */
    private \$id;

    /** @var  string */
    private \$name;

}
PHP;
    $fileName = "src/Model/{$model}.php";
    shell_exec("touch $fileName");
    fill($fileName, $fileContent);
}

/*
 * Command
 */
pl();
p("Creating command ($command)...");
$cmd = "mkdir -p src/Command/{$model}";
shell_exec($cmd);
$fileName = "src/Command/{$model}/{$command}.php";
shell_exec("touch {$fileName}");
$modelVar = strtolower($model);
$fileContent = <<<PHP
<?php

namespace Pilulka\CoreApiClient\Command\\{$model};

use Pilulka\CoreApiClient\Model\\{$model};
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class {$command} implements Request
{
    private const uri = '{$uri}';

    /** @var $model */
    private \${$modelVar};

    public function __construct({$model} \${$modelVar})
    {
        \$this->{$modelVar} = \${$modelVar};
    }
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::{$method};
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::uri;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode([
            'id' => \$this->{$modelVar}->id,
        ]);
    }
}
PHP;
fill($fileName, $fileContent);

/*
 * Response
 */
$fileName = "src/Command/{$model}/{$command}Response.php";
shell_exec("touch {$fileName}");
$fileContent = <<<PHP
<?php

namespace Pilulka\CoreApiClient\Command\\{$model};

use Pilulka\CoreApiClient\Model\JsonModel;
use Pilulka\CoreApiClient\Response\Response;

class {$command}Response implements Response
{
    /**
     * @var array
     */
    private \$arrayResult;

    public function __construct(array \$arrayResult)
    {
        \$this->arrayResult = \$arrayResult;
    }

    public function result(): bool
    {
        return \$this->arrayResult['result'] ?? false;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return \$this->arrayResult;
    }

    /**
     * @return JsonModel
     */
    public function toModel(): JsonModel
    {
        return new JsonModel(\$this->arrayResult);
    }
}
PHP;
pl();
p("Creating Response ($fileName)...");
fill($fileName, $fileContent);

/*
 * Test
 */
pl();
p('Creating test...');
$cmd = "vendor/bin/codecept g:test functional {$model}/{$command}";
p(shell_exec($cmd));
$fileName = "tests/functional/{$model}/{$command}Test.php";
$fileContent = <<<PHP
<?php

namespace {$model};

use Pilulka\CoreApiClient\Command\\{$model}\\{$command};
use Pilulka\CoreApiClient\JsonApiClient;
use Pilulka\CoreApiClient\Model\\{$model};

class {$command}Test extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /*
     * @group {$model}
     */
    public function test{$command}(): void
    {
        \${$modelVar} = new {$model}([
            'id' => 1,
            'name' => '{$model} name',
        ]);

        \$response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new {$command}(\${$modelVar}));

        \$this->assertTrue(\$response->result);
    }
}
PHP;
fill($fileName, $fileContent);

pl();
p("Dont`t forget to implement {$command}Response.getBody()");
p("Don`t forget to check test");

/*
 * Run Test
 */
pl();
$cmd = "vendor/bin/codecept run functional {$model}/{$command}Test.php";
p("Run Test: $cmd");
if (array_key_exists('run-test', $_GET)) {
    p(shell_exec($cmd));
}
