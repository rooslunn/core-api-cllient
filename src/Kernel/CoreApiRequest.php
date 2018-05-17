<?php

namespace Pilulka\CoreApi\Client\Kernel;

use GuzzleHttp\{
    Psr7\Request, Psr7\Response, Client
};
use Pilulka\CoreApi\Client\Contract\ActionRequest;

class CoreApiRequest
{
    public static function send(ActionRequest $request): Response
    {
        $client = new Client();
        $request = new Request(
            $request->getVerb(),
            $request->getUri(),
            $request->getHeaders());
        $response = $client->send($request);
        return $response;
    }
}