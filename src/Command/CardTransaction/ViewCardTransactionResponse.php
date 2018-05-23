<?php


namespace Pilulka\CoreApiClient\Command\CardTransaction;

use Pilulka\CoreApiClient\Model\CardTransaction;
use Pilulka\CoreApiClient\Response\Response;

class ViewCardTransactionResponse implements Response
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
        return true;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->arrayResult;
    }

    /**
     * @return CardTransaction[]
     */
    public function toModel(): array
    {
        return array_map(function ($item) {
            return new CardTransaction($item);
        }, $this->arrayResult);
    }
}