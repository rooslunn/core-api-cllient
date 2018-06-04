<?php

namespace Pilulka\CoreApiClient\Command\Supplier;

use Pilulka\CoreApiClient\Model\Supplier\Supplier;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateSupplier implements Request
{
    private const URI = '/supplier';

    /**
     * @var Supplier
     */
    private $supplier;

    /**
     * CreateSupplier constructor.
     * @param Supplier $supplier
     */
    public function __construct(Supplier $supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::PUT;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URI;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode($this->supplier);
    }
}
