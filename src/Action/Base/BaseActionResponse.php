<?php

namespace Pilulka\CoreApi\Client\Action\Base;


use GuzzleHttp\Psr7\Response as Psr7Response;
use Pilulka\CoreApi\Client\Contract\ApiResponse;

class BaseActionResponse implements ApiResponse
{

    protected $psr7Response;

    public static function fromPsr7(Psr7Response $psr7Response): ApiResponse
    {
        $response = new self();
        $response->psr7Response = $psr7Response;
        return $response;
    }

    public function getStatusCode(): int
    {
        return $this->psr7Response->getStatusCode();
    }

    public function getJson(): string
    {
        return $this->psr7Response->getBody();
    }
}