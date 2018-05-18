<?php


namespace Pilulka\CoreApi\Client\Action\Manufacturer\Create;


use Pilulka\CoreApi\Client\Action\Base\BaseActionRequest;

class ManufacturerCreateRequest extends BaseActionRequest
{
    public function __construct(array $payload)
    {
        parent::__construct('PUT', 'manufacturer.create');
        $this->setBody(json_encode($payload));
    }
}