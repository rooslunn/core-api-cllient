<?php

namespace Pilulka\CoreApi\Client\Action\Base;


use Pilulka\CoreApi\Client\Kernel\CoreApiRequest;
use Pilulka\CoreApi\Client\Contract\{ActionRequest, ApiResponse};

class BaseAction
{
    public function send(ActionRequest $request): ApiResponse
    {
        $response = CoreApiRequest::send($request);
        return BaseActionResponse::fromPsr7($response);
    }
}