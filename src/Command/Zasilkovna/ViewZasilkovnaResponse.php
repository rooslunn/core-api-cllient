<?php

namespace Pilulka\CoreApiClient\Command\Zasilkovna;

use Pilulka\CoreApiClient\JsonArtisan;
use Pilulka\CoreApiClient\Model\Zasilkovna\Zasilkovna;
use Pilulka\CoreApiClient\Response\Response;

class ViewZasilkovnaResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * DeleteProductFavoriteResponse constructor.
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
        return isset($this->objectResult->id);
    }

    /**
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $zasilkovna = JsonArtisan::jsonMapAndTimestamps(
            [$this->objectResult], Zasilkovna::class, ['createdAt', 'updatedAt'])[0];
        return $zasilkovna;
    }
}
