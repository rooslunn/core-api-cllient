<?php

namespace Pilulka\CoreApiClient\Command\CardTransaction;

use Pilulka\CoreApiClient\Model\CardTransaction;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateCardTransaction implements Request
{
    private const url = '/card/transaction';

    /** @var CardTransaction */
    private $transaction;

    /**
     * @param CardTransaction $transaction
     */
    public function __construct(CardTransaction $transaction)
    {
        $this->transaction = $transaction;
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
        return self::url;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode([
            'id' => $this->transaction->id,
            'userId' => $this->transaction->userId,
            'time' => $this->transaction->time,
            'credits' => $this->transaction->credits,
            'orderNumber' => $this->transaction->orderNumber,
        ]);
    }
}