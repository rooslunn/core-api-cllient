<?php

namespace Pilulka\CoreApiClient\Command\Pharmacy;

use Pilulka\CoreApiClient\Model\Pharmacy\Pharmacy;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewListPharmacy implements Request
{
    private const uri = '/pharmacy/list';

    /** @var array */
    private $params;

    public function __construct(array $params)
    {
        $this->params = $params;
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
        return self::uri . '?' . http_build_query($this->params);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}