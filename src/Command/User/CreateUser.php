<?php

namespace Pilulka\CoreApiClient\Command\User;

use Pilulka\CoreApiClient\DataTransformer\User\UserArrayTransformer;
use Pilulka\CoreApiClient\Model\User\User;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateUser implements Request
{
    private const URI = '/user';

    /**
     * @var User
     */
    private $user;

    /**
     * CreateUser constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::PUT;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URI;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        $data = (new UserArrayTransformer($this->user))->transform();

        return \GuzzleHttp\json_encode($data);
    }
}
