<?php

namespace Pilulka\CoreApiClient\Command\User;

use Pilulka\CoreApiClient\Response\Response;

class CreateUserResponse implements Response
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

    /**
     * @return object
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();
        $result->userId = $this->objectResult->userId;
        return $result;
    }
}
