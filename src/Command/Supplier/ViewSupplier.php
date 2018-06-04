<?php

namespace Pilulka\CoreApiClient\Command\Supplier;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewSupplier implements Request
{
    private const URI = '/supplier';

    /**
     * @var int
     */
    private $id;

    /**
     * ViewSupplier constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
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
        return self::URI . "/{$this->id}";
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
