<?php


namespace Pilulka\CoreApiClient\Command\CardTransaction;

use JsonMapper;
use Pilulka\CoreApiClient\Model\CardTransaction\CardTransaction;
use Pilulka\CoreApiClient\Response\Response;

class ViewCardTransactionResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    public function __construct($arrayResult)
    {
        $this->objectResult = $arrayResult;
    }

    public function result(): bool
    {
        return true;
    }

    /**
     * @return CardTransaction[]
     */
    public function toModel(): array
    {
        $mapper = new JsonMapper();

        return array_map(function ($item) use ($mapper) {
            return $mapper->map($item, new CardTransaction());
        }, $this->objectResult);
    }
}