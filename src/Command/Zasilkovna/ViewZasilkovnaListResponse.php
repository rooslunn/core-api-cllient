<?php

namespace Pilulka\CoreApiClient\Command\Zasilkovna;

use Pilulka\CoreApiClient\JsonArtisan;
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
        $result = (object) $this->objectResult;
        $result->zasilkovna = JsonArtisan::jsonMapAndTimestamps($result->zasilkovna, Zasilkovna::class, ['createdAt', 'updatedAt']);
        return $result;
    }
}
