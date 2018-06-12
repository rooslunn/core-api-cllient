<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductAvailabilityByIds implements Request
{
    private const URI = '/product/availability?';

    /** @var array */
    private $ids;

    /**
     * ViewProductAvailabilityByIds constructor.
     * @param array $ids
     */
    public function __construct(array $ids)
    {
        $this->ids = $ids;
    }

    /**
     * @return array
     */
    public function getIds()
    {
        return $this->ids;
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
        return self::URI . http_build_query(['id' => $this->ids]);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}
