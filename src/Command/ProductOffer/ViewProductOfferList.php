<?php

namespace Pilulka\CoreApiClient\Command\ProductOffer;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductOfferList implements Request
{
    private const URI = '/productoffer/list';

    /** @var int|null */
    private $from;
    /** @var int|null */
    private $size;

    /**
     * ViewProductOfferList constructor.
     * @param int|null $from
     * @param int|null $size
     */
    public function __construct(?int $from, ?int $size)
    {
        $this->from = $from;
        $this->size = $size;
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
        return self::URI . '?' . http_build_query(['from' => $this->from, 'size' => $this->size]);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }

    /**
     * @return int|null
     */
    public function getFrom(): ?int
    {
        return $this->from;
    }

    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }
}
