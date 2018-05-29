<?php

namespace Pilulka\CoreApiClient\Command\Manufacturer;

use Pilulka\CoreApiClient\Model\Manufacturer\Manufacturer;
use Pilulka\CoreApiClient\Response\Response;

class ViewManufacturerResponse implements Response
{
    /**
     * @var array
     */
    private $arrayResult;

    public function __construct(array $arrayResult)
    {
        $this->arrayResult = $arrayResult;
    }

    public function result(): bool
    {
        return $this->arrayResult['id'] ? true : false;
    }

    /**
     * @return array
     */
    public function toObject(): array
    {
        return $this->arrayResult;
    }

    /**
     * @return Manufacturer
     */
    public function toModel(): Manufacturer
    {
        return new Manufacturer($this->arrayResult);
    }
}