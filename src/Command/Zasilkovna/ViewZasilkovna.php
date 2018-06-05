<?php

namespace Pilulka\CoreApiClient\Command\Zasilkovna;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewZasilkovna implements Request
{
    private const URI = '/zasilkovna';

    /** @var int */
    private $id;

    /**
     * ViewZasilkovna constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
}
