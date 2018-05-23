<?php


namespace Pilulka\CoreApiClient\Command\Brand;


use Pilulka\CoreApiClient\Model\Brand;
use Pilulka\CoreApiClient\Response\Response;

class ViewBrandResponse implements Response
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
    public function toArray(): array
    {
        return [
            'id' => $this->arrayResult['id']
        ];
    }

    /**
     * @return Brand
     */
    public function toModel(): Brand
    {
        return new Brand($this->arrayResult);
    }
}