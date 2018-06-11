<?php

namespace Pilulka\CoreApiClient\Command\Shipping;

use Pilulka\CoreApiClient\Model\Shipping\Shipping;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateShipping implements Request
{
    private const URI = '/shipping';

    /**
     * @var Shipping
     */
    private $shipping;

    public function __construct(Shipping $shipping)
    {
        $this->shipping = $shipping;
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
        $payItems = [];
        $pays = $this->shipping->getPays();
        foreach ($pays as $pay) {
            $payItems[] = [
                'id' => $pay->getId(),
                'method' => $pay->getMethod(),
                'title' => $pay->getTitle(),
                'fee' => $pay->getFee(),
                'sort' => $pay->getSort()
            ];
        }

        $data = [
            'id' => $this->shipping->getId(),
            'title' => $this->shipping->getTitle(),
            'content' => [
                'long' => $this->shipping->getContent()->getLong(),
                'short' => $this->shipping->getContent()->getShort()
            ],
            'sort' => $this->shipping->getSort(),
            'type' => $this->shipping->getType(),
            'fee' => $this->shipping->getFee(),
            'isActive' => $this->shipping->isActive(),
            'pays' => $payItems
        ];

        return \GuzzleHttp\json_encode($data);
    }
}
