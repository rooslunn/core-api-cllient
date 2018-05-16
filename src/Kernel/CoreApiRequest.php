<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 16/05/18
 * Time: 13:40
 */

namespace Pilulka\CoreApi\Client\Kernel;

use GuzzleHttp\{
    Psr7\Request, Psr7\Response, Client
};
use Pilulka\CoreApi\Client\Contracts\ActionRequest;

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