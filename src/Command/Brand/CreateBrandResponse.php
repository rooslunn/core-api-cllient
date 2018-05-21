<?php


namespace Pilulka\CoreApiClient\Command\Brand;


use Pilulka\CoreApiClient\Response\Response;

class CreateBrandResponse implements Response
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
        return $this->arrayResult['result'] ?? false;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->arrayResult;
    }
}