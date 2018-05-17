<?php


namespace Pilulka\CoreApi\Client\Action\Manufacturer\View;


use Pilulka\CoreApi\Client\Action\Base\BaseAction;
use Pilulka\CoreApi\Client\Contract\ApiAction;
use Pilulka\CoreApi\Client\Contract\ApiResponse;

final class ManufacturerViewAction extends BaseAction implements ApiAction
{
    public function execute(array $params = []): ApiResponse
    {
        $request = new ManufacturerViewRequest($params);
        return parent::send($request);
    }
}