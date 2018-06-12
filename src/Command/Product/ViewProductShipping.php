<?php
declare(strict_types=1);

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Request\http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductShipping implements Request
{
    private const URI = '/product_shipping?';

    /** @var array|null */
    private $productIds;

    /**
     * ViewProductShipping constructor.
     * @param array|null $productIds
     */
    public function __construct(?array $productIds)
    {
        $this->productIds = $productIds;
    }

    /**
     * @return array|null
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
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
        return self::URI . http_build_query(['id' => $this->productIds]);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}