<?php


namespace Pilulka\CoreApiClient\Command\Brand;


use Pilulka\CoreApiClient\Model\{JsonModel, Card};
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
     * @return JsonModel
     */
    public function toModel(): JsonModel
    {
        return new Card($this->arrayResult);
    }
}