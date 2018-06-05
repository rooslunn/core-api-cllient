<?php

namespace Pilulka\CoreApiClient\Command\User;

use Pilulka\CoreApiClient\Model\User\UserFilterQuery;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewUserByFilter implements Request
{
    private const URI = '/user';

    /**
     * @var UserFilterQuery
     */
    private $query;

    /**
     * ViewUserByFilter constructor.
     * @param UserFilterQuery $query
     */
    public function __construct(UserFilterQuery $query)
    {
        $this->query = $query;
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
        return self::URI;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode($this->query);
    }
}
