<?php

namespace Pilulka\CoreApiClient\Command\User;

use JsonMapper;
use Pilulka\CoreApiClient\Model\User\User;
use Pilulka\CoreApiClient\Response\Response;

class ViewUserByEmailPasswordResponse implements Response
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
        return isset($this->objectResult->id) ? true : false;
    }

    /**
     * @return object|User
     * @throws \JsonMapper_Exception
     */
    public function toModel(): User
    {
        $mapper = new JsonMapper();
        return $mapper->map($this->objectResult, new User());
    }
}
