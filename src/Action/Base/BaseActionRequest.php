<?php

namespace Pilulka\CoreApi\Client\Action\Base;


use Pilulka\CoreApi\Client\Contract\ActionRequest;

class BaseActionRequest implements ActionRequest
{
    protected $verb;

    protected $action;

    protected $headers;

    protected $params;

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
}