<?php


namespace Pilulka\CoreApiClient\Response;


use Pilulka\CoreApiClient\Request\Http;

class ResponseException implements Response
{
    private $errorCode = [
        Http::CODE_404 => 100,
        Http::CODE_500 => 101
    ];

    private $httpCode;


    public function __construct(int $httpCode)
    {
        $this->httpCode = $httpCode;
    }

    public function result(): bool
    {
        return false;
    }

    /**
     * @return array
     */
    public function toObject(): array
    {
        return [
            'result' => false,
            'errorCode' => $this->errorCode[$this->httpCode]
        ];
    }

    /**
     * @return object
     */
    public function toModel()
    {
        return (object) $this->toObject();
    }
}