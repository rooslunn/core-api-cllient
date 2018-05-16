<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 16/05/18
 * Time: 14:37
 */

namespace Pilulka\CoreApi\Client\Actions\Base;


use Pilulka\CoreApi\Client\Contracts\ActionRequest;

class BaseActionRequest implements ActionRequest
{
    protected $verb;

    protected $uri;

    protected $headers;

    public function __construct(string $verb, string $uri, array $headers = [])
    {
        $this->verb = $verb;
        $this->uri = $uri;
        $this->headers = $headers;
    }

    public function getVerb(): string
    {
        return $this->verb;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }
}