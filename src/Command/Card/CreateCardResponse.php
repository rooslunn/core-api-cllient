<?php


namespace Pilulka\CoreApiClient\Command\Card;

use Pilulka\CoreApiClient\Response\Response;

class CreateCardResponse implements Response
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
        return $this->objectResult->result ?? false;
    }


    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();
        return $result;
    }
}