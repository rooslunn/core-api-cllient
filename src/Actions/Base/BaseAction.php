<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 16/05/18
 * Time: 14:32
 */

namespace Pilulka\CoreApi\Client\Actions\Base;


use Pilulka\CoreApi\Client\Kernel\CoreApiRequest;
use Pilulka\CoreApi\Client\Contracts\{
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