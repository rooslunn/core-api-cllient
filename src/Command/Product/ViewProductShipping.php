<?php
declare(strict_types=1);

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Request\http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductShipping implements Request
{
    private const URI = '/product_shipping/';
    /**
     * @var int
     */
    private $productId;

    /**
     * ViewProductShipping constructor.
     * @param int $productId
     */
    public function __construct(int $productId)
    {
        $this->productId = $productId;
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
        return self::URI . $this->productId;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}