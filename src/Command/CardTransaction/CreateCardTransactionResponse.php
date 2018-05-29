<?php


namespace Pilulka\CoreApiClient\Command\CardTransaction;

use Pilulka\CoreApiClient\Model\CardTransaction\CardTransaction;
use Pilulka\CoreApiClient\Response\Response;

class CreateCardTransactionResponse implements Response
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
        return $this->objectResult['result'] ?? false;
    }

    /**
     * @return CardTransaction|object
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();
        return $result;
    }
}