<?php

namespace Pilulka\CoreApiClient\Command\Zasilkovna;

use Pilulka\CoreApiClient\Model\Zasilkovna\Zasilkovna;
use Pilulka\CoreApiClient\Response\Response;

class ViewZasilkovnaListResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * ViewZasilkovnaListResponse constructor.
     * @param $arrayResult
     */
    public function __construct($arrayResult)
    {
        $this->objectResult = $arrayResult;
    }

    /**
     * @return bool
     */
    public function result(): bool
    {
        return isset($this->objectResult->total);
    }

    /**
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $return['total'] = $this->objectResult->total;

        $mapper = new \JsonMapper();

        foreach ($this->objectResult->zasilkovna ?? [] as $item) {
            $return['zasilkovna'][] = $mapper->map($item, new Zasilkovna());
        }

        return $return;
    }
}
