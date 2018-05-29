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
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $mapper = new JsonMapper();

        $return = [];

        foreach ($this->objectResult as $trans){
            $trans->time = (new \DateTime())->setTimestamp($trans->time);
            $return[] = $mapper->map($trans, new CardTransaction());
        }

        return $return;
    }
}