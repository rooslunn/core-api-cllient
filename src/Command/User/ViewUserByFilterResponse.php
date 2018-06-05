<?php

namespace Pilulka\CoreApiClient\Command\User;

use JsonMapper;
use Pilulka\CoreApiClient\Model\User\User;
use Pilulka\CoreApiClient\Response\Response;

class ViewUserByFilterResponse implements Response
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
        return isset($this->objectResult->User) ? true : false;
    }

    /**
     * @return object
     */
    public function toModel()
    {
        return $this->objectResult->User;
    }
}
