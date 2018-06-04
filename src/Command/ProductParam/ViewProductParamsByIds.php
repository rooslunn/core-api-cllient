<?php

namespace Pilulka\CoreApiClient\Command\ProductParam;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductParamsByIds implements Request
{
    private const URI = '/productparam/byids';

    /** @var  int[] */
    private $ids;

    /**
     * ViewProductParamsByIds constructor.
     * @param array $ids
     */
    public function __construct(array $ids)
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
        return self::URI . '?' . http_build_query(['id' => $this->ids]);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }

    /**
     * @return int[]
     */
    public function getIds(): array
    {
        return $this->ids;
    }
}
