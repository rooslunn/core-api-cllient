<?php

namespace Pilulka\CoreApiClient\Command\User;

use Pilulka\CoreApiClient\Model\User\User;
use Pilulka\CoreApiClient\Response\Response;

class UpdateUserResponse implements Response
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
     * @return object|\stdClass
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();
        $result->userId = $this->objectResult->userId;
        return $result;
    }
}
