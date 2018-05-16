<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 16/05/18
 * Time: 14:22
 */

namespace Pilulka\CoreApi\Client\Contracts;

use GuzzleHttp\Psr7\Response;

interface ApiResponse
{
    public static function fromPsr7(Response $psr7Response): ApiResponse;

    public function getStatusCode(): int;
    public function getJson(): string;
}