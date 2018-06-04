<?php

namespace Pilulka\CoreApiClient\Command\ProductLine;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductLines implements Request
{
    private const URI = '/productline/byids';

    private $ids;

    /**
     * ViewProductLines constructor.
     * @param $ids
     */
    public function __construct($ids)
    {
        $this->ids = $ids;
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
        return self::URI . '?' . http_build_query(['ids' => $this->ids]);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }

    /**
     * @return array
     */
    public function getIds()
    {
        return $this->ids;
    }
}
