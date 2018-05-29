<?php


namespace Pilulka\CoreApiClient\Command\Card;


use JsonMapper;
use Pilulka\CoreApiClient\Model\Card\Card;
use Pilulka\CoreApiClient\Response\Response;

class ViewCardResponse implements Response
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
        return $this->objectResult->userId ? true : false;
    }

    /**
     * @return object|Card
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $mapper = new JsonMapper();
        return $mapper->map($this->objectResult, new Card());
    }
}