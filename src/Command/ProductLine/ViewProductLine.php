<?php

namespace Pilulka\CoreApiClient\Command\ProductLine;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewProductLine implements Request
{
    private const URI = '/productline';

    private $id;

    /**
     * ViewProductLine constructor.
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
