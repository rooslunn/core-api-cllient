<?php


namespace Pilulka\CoreApi\Client\Action\Manufacturer\View;


use Pilulka\CoreApi\Client\Action\Base\BaseActionRequest;

final class ManufacturerViewRequest extends BaseActionRequest
{
    public function __construct(array $payload)
    {
        parent::__construct('GET', 'manufacturer.view', $payload);
    }
}