<?php

namespace Pilulka\CoreApiClient\Command\Order;

use Pilulka\CoreApiClient\JsonArtisan;
use Pilulka\CoreApiClient\Model\Order\Order;
use Pilulka\CoreApiClient\Model\Order\OrderItem;
use Pilulka\CoreApiClient\Response\Response;

class ViewOrderResponse implements Response
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
        return array_key_exists('id', $this->objectResult);
    }

    /**
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $result = new \stdClass();
        $result->result = $this->result();

        if ($result->result) {
            /** @var Order order */
            $result->order = JsonArtisan::jsonMap([$this->objectResult], Order::class)[0];
            $result->order->items = JsonArtisan::jsonMap($this->objectResult->items, OrderItem::class);
        }

        return $result;
    }
}