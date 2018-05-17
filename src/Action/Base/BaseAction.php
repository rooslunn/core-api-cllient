<?php

namespace Pilulka\CoreApi\Client\Action\Base;


use Pilulka\CoreApi\Client\Kernel\CoreApiRequest;
use Pilulka\CoreApi\Client\Contract\{
    ActionRequest, ApiAction, ApiResponse
};

class BaseAction implements ApiAction
{

    public function execute(ActionRequest $request): ApiResponse
    {
        $response = CoreApiRequest::send($request);
        return BaseActionResponse::fromPsr7($response);
    }
}