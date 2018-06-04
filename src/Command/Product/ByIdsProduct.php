<?php

namespace Pilulka\CoreApiClient\Command\Product;

use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Model\Sort\SortType;
use Pilulka\CoreApiClient\Request\{Http, Request};

class ByIdsProduct implements Request
{
    private const URI = '/product/byids?';

    /** @var array */
    private $ids;

    /** @var SortType::const */
    private $sortMethod;

    /** @var int  */
    private $from;

    /** @var int  */
    private $size;

    public function __construct(array $ids, int $sortMethod, int $from = 0, int $size = 12)
    {
        $this->ids = $ids;
        $this->sortMethod = $sortMethod;
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
        return self::URI . http_build_query([
            'id' => $this->ids,
            'sortMethod' => $this->sortMethod,
            'from' => $this->from,
            'size' => $this->size,
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