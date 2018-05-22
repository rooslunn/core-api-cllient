<?php


namespace Pilulka\CoreApiClient\Command\Card;


use Pilulka\CoreApiClient\Model\{JsonModel, Card};
use Pilulka\CoreApiClient\Response\Response;

class ViewCardResponse implements Response
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
        return $this->arrayResult['userId'] ? true : false;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->arrayResult;
    }

    /**
     * @return JsonModel
     */
    public function toModel(): JsonModel
    {
        return new Card($this->arrayResult);
    }
}