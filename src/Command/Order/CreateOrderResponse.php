<?php

namespace Pilulka\CoreApiClient\Command\Order;

use Pilulka\CoreApiClient\Response\Response;

class CreateOrderResponse implements Response
{
    /**
     * @var array
     */
    private $arrayResult;

    public function __construct(array $arrayResult)
    {
        $this->arrayResult = $arrayResult;
    }

    public function result(): bool
    {
        return $this->arrayResult['result'] ?? false;
    }

    /**
     * @return array
     */
    public function toObject(): array
    {
        return $this->arrayResult;
    }

    public function toModel()
    {
        /*return new JsonModel($this->arrayResult);
        $order = new Order($this->arrayResult);
        $order->items = array_map(function ($item) {
            return new OrderItem($item);
        }, $order->items);
        return $order;*/
    }
}