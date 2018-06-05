<?php

namespace Pilulka\CoreApiClient\Command\Basket;

use Pilulka\CoreApiClient\JsonArtisan;
use Pilulka\CoreApiClient\Model\Basket\Basket;
use Pilulka\CoreApiClient\Model\Basket\BasketItem;
use Pilulka\CoreApiClient\Model\Basket\BasketShipping;
use Pilulka\CoreApiClient\Response\Response;

class KosikBasketResponse implements Response
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
        return array_key_exists('Basket', $this->objectResult);
    }

    /**
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();

        $result->Basket = JsonArtisan::jsonMap($this->objectResult->Basket, Basket::class);

        /**
         * @var int $key
         * @var Basket $item
         */
        foreach ($result->Basket as $key => &$item) {
            $responseBasket = $this->objectResult->Basket[$key];
            $item->setBaskets(JsonArtisan::jsonMap($responseBasket->items, BasketItem::class));
            $item->setShipping(
                (new BasketShipping)
                    ->setShippingId($responseBasket->shippingId)
                    ->setBasketId($item->getId())
                    ->setPayId($responseBasket->pay->payId)
                    ->setUseCredit($responseBasket->pay->useCredit)
                    ->setVoucherCode($responseBasket->pay->voucherCode)
            );
        }

        return $result;
    }
}