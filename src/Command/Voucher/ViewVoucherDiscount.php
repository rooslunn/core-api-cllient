<?php

namespace Pilulka\CoreApiClient\Command\Voucher;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewVoucherDiscount implements Request
{
    private const URI = '/voucher';

    /** @var string */
    private $code;
    /** @var array */
    private $categoryIds;
    /** @var array */
    private $productIds;
    /** @var int|null */
    private $deliveryMethod;
    /** @var float */
    private $price;

    /**
     * ViewVoucherDiscount constructor.
     * @param string $code
     * @param array $categoryIds
     * @param array $productIds
     * @param int|null $deliveryMethod
     * @param float $price
     */
    public function __construct(string $code, array $categoryIds, array $productIds, ?int $deliveryMethod, float $price)
    {
        $this->code = $code;
        $this->categoryIds = $categoryIds;
        $this->productIds = $productIds;
        $this->deliveryMethod = $deliveryMethod;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return array
     */
    public function getCategoryIds(): array
    {
        return $this->categoryIds;
    }

    /**
     * @return array
     */
    public function getProductIds(): array
    {
        return $this->productIds;
    }

    /**
     * @return int|null
     */
    public function getDeliveryMethod(): ?int
    {
        return $this->deliveryMethod;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::GET;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URI . '?' . http_build_query([
                'code' => $this->code,
                'categoryId' => $this->categoryIds,
                'productId' => $this->productIds,
                'deliveryMethod' => $this->deliveryMethod,
                'price' => $this->price,
            ]);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}
