<?php

namespace Pilulka\CoreApiClient\Command\Pharmacy;

use Pilulka\CoreApiClient\Model\Pharmacy\Pharmacy;
use Pilulka\CoreApiClient\Model\Pharmacy\PharmacyList;
use Pilulka\CoreApiClient\Response\Response;

class ViewListPharmacyResponse implements Response
{
    /**
     * @var array
     */
    private $arrayResult;

    public function __construct(array $arrayResult)
    {
        $this->arrayResult = $arrayResult;
    }

    public function result(): bool
    {
        return $this->arrayResult['total'] ? true : false;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->arrayResult;
    }

    /**
     * @return PharmacyList
     */
    public function toModel(): PharmacyList
    {
        $list = new PharmacyList($this->arrayResult);
        $list->pharmacy = array_map(function ($item) {
            return new Pharmacy($item);
        }, $list->pharmacy);
        return $list;
    }
}