<?php

namespace Pilulka\CoreApiClient\Command\Zasilkovna;

use Pilulka\CoreApiClient\Model\Zasilkovna\Zasilkovna;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateZasilkovna implements Request
{
    private const URI = '/zasilkovna';

    /**
     * @var Zasilkovna
     */
    private $zasilkovna;

    /**
     * CreateZasilkovna constructor.
     * @param Zasilkovna $zasilkovna
     */
    public function __construct(Zasilkovna $zasilkovna)
    {
        $this->zasilkovna = $zasilkovna;
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
        return \GuzzleHttp\json_encode($this->zasilkovna);
    }
}
