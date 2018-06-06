<?php

namespace Pilulka\CoreApiClient\Command\Shipping;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewListShipping implements Request
{
    private const URI = '/shipping/list';

    /** @var int  */
    private $from;

    /** @var int  */
    private $size;

    /**
     * ViewShippingList constructor.
     * @param int $from
     * @param int $size
     */
    public function __construct($from, $size)
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
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
}
