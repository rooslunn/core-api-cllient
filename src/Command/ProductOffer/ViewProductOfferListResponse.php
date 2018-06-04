<?php

namespace Pilulka\CoreApiClient\Command\ProductOffer;

use Pilulka\CoreApiClient\Model\ProductOffer\ProductOffer;
use Pilulka\CoreApiClient\Response\Response;

class ViewProductOfferListResponse implements Response
{
    /**
     * @var object
     */
    private $objectResult;

    /**
     * ViewProductOfferResponse constructor.
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
        return is_iterable($this->objectResult);
    }

    /**
     * @return object
     * @throws \JsonMapper_Exception
     */
    public function toModel()
    {
        $return['total'] = $this->objectResult->total;

        $mapper = new \JsonMapper();

        foreach ($this->objectResult->productOffer ?? [] as $offer) {
            $offer->startDate = (new \DateTime())->setTimestamp($offer->startDate);
            $offer->stopDate = (new \DateTime())->setTimestamp($offer->stopDate);
            $return['productOffer'][] = $mapper->map($offer, new ProductOffer());
        }

        return $return;
    }
}
