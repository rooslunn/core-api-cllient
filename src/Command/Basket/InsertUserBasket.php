<?php

namespace Pilulka\CoreApiClient\Command\Basket;

use Pilulka\CoreApiClient\Model\Basket\Basket;
use Pilulka\CoreApiClient\Request\{
    Basket\InsertUserRequestParams, Http, Request
};

class InsertUserBasket implements Request
{
    private const URI = '/basket/user/%s';

    /** @var string */
    private $uid;

    /** @var InsertUserRequestParams  */
    private $requestParams;

    public function __construct(string $uid, InsertUserRequestParams $requestParams)
    {
        $this->uid = $uid;
        $this->requestParams = $requestParams;
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
        return \sprintf(self::URI, $this->uid);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode($this->requestParams);
    }
}