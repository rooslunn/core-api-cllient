<?php

namespace Pilulka\CoreApi\Client\Action\Base;


use Pilulka\CoreApi\Client\Contract\ActionRequest;
use function Pilulka\CoreApi\Client\Helpers\action_url;
use function Pilulka\CoreApi\Client\Helpers\propagate_params;

class BaseActionRequest implements ActionRequest
{
    protected $verb;

    protected $action;

    protected $headers;

    protected $params;

    protected $body;

    public function __construct(string $verb, string $action, array $params = [], array $headers = [])
    {
        $this->verb = $verb;
        $this->action = $action;
        $this->params = $params;
        $this->headers = $headers;
    }

    public function getVerb(): string
    {
        return $this->verb;
    }

    public function getUri(): string
    {
        $action_url = action_url($this->action);
        $action_url = propagate_params($action_url, $this->params);
        return $action_url;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function getBody(): string
    {
        return $this->body ?? '';
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }
}