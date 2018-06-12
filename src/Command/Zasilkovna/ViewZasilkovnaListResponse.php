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
        $result->zasilkovna = JsonArtisan::jsonMap($result->zasilkovna, Zasilkovna::class, function ($item) {
            $fields = ['createdAt', 'updatedAt'];
            foreach ($fields as $field) {
                if (isset($item->{$field}) && ! $item->{$field} instanceof \DateTime) {
                    $item->{$field} = (new \DateTime)->setTimestamp($item->{$field});
                }
            }
            return $item;
        });
        return $result;
    }
}
