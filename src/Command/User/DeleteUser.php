<?php

namespace Pilulka\CoreApiClient\Command\User;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class DeleteUser implements Request
{
    private const URI = '/user';

    /** @var int */
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::DELETE;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URI . '/' . $this->id;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}
