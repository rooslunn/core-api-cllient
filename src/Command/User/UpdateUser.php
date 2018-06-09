<?php

namespace Pilulka\CoreApiClient\Command\User;

use Pilulka\CoreApiClient\DataTransformer\User\UserArrayTransformer;
use Pilulka\CoreApiClient\Model\Comment\Comment;
use Pilulka\CoreApiClient\Model\User\User;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class UpdateUser implements Request
{
    private const URI = '/user';

    /**
     * @var int
     */
    private $id;

    /** @var Comment */
    private $user;

    public function __construct(User $user, $id)
    {
        $this->user = $user;
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::POST;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URI . "/{$this->id}" ;
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
