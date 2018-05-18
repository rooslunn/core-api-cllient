<?php


namespace Pilulka\CoreApi\Client\Action\Manufacturer\Create;


use Pilulka\CoreApi\Client\Action\Base\BaseAction;
use Pilulka\CoreApi\Client\Contract\ApiResponse;

class ManufacturerCreateAction extends BaseAction
{
    public function __invoke(array $payload = []): ApiResponse
    {
        $request = new ManufacturerCreateRequest($payload);
        return parent::send($request);
    }
}