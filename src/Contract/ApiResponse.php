<?php

namespace Pilulka\CoreApi\Client\Contract;

use GuzzleHttp\Psr7\Response;

interface ApiResponse
{
    public static function fromPsr7(Response $psr7Response): ApiResponse;

    public function getStatusCode(): int;
    public function getJson(): string;
}