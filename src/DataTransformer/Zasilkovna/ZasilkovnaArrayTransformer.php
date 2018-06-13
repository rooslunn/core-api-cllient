<?php

namespace Pilulka\CoreApiClient\DataTransformer\Zasilkovna;

use Pilulka\CoreApiClient\DataTransformer\DataTransformer;
use Pilulka\CoreApiClient\Model\Zasilkovna\Zasilkovna;

/**
 * Class ZasilkovnaArrayTransformer
 * @package Pilulka\CoreApiClient\DataTransformer\Zasilkovna
 */
class ZasilkovnaArrayTransformer implements DataTransformer
{
    /**
     * @var Zasilkovna
     */
    private $zasilkovna;

    /**
     * ZasilkovnaArrayTransformer constructor.
     * @param Zasilkovna $zasilkovna
     */
    public function __construct(Zasilkovna $zasilkovna)
    {
        $this->zasilkovna = $zasilkovna;
    }

    /**
     * @return array
     */
    public function transform(): array
    {
        $photosItems = [];
        $photos = $this->zasilkovna->getPhotos();
        foreach ($photos as $photo) {
            $photosItems[] = [
                'thumbnail' => $photo->getThumbnail(),
                'normal' => $photo->getNormal(),
            ];
        }

        $result = [
            'id' => $this->zasilkovna->getId(),
            'name' => $this->zasilkovna->getName(),
            'nameStreet' => $this->zasilkovna->getNameStreet(),
            'place' => $this->zasilkovna->getPlace(),
            'street' => $this->zasilkovna->getStreet(),
            'city' => $this->zasilkovna->getCity(),
            'zip' => $this->zasilkovna->getZip(),
            'country' => $this->zasilkovna->getCountry(),
            'currency' => $this->zasilkovna->getCurrency(),
            'location' => [
                'lat' => $this->zasilkovna->getLocation()->getLat(),
                'lon' => $this->zasilkovna->getLocation()->getLon()
            ],
            'url' => $this->zasilkovna->getUrl(),
            'dressingRoom' => $this->zasilkovna->getDressingRoom(),
            'claimAssistant' => $this->zasilkovna->getClaimAssistant(),
            'packetConsignment' => $this->zasilkovna->getPacketConsignment(),
            'maxWeight' => $this->zasilkovna->getMaxWeight(),
            'photos' => $photosItems,
            'openingHours' => [
                'compactShort' => $this->zasilkovna->getOpeningHours()->getCompactShort(),
                'compactLong' => $this->zasilkovna->getOpeningHours()->getCompactLong(),
                'tableLong' => $this->zasilkovna->getOpeningHours()->getTableLong()
            ],
            'directions' => $this->zasilkovna->getDirections(),
            'directionsPublic' => $this->zasilkovna->getDirectionsPublic(),
            'special' => $this->zasilkovna->getSpecial(),
            'directionsCar' => $this->zasilkovna->getDirectionsCar(),
            'holidayStart' => $this->zasilkovna->getHolidayStart(),
            'holidayEnd' => $this->zasilkovna->getHolidayEnd(),
            'noticeMessage' => $this->zasilkovna->getNoticeMessage(),
            'openSince' => $this->zasilkovna->getOpenSince(),
            'updatedAt' => $this->zasilkovna->getUpdatedAt()->getTimestamp(),
            'createdAt' => $this->zasilkovna->getCreatedAt()->getTimestamp(),
            'distance' => $this->zasilkovna->getDistance(),
            'region' => $this->zasilkovna->getRegion(),
            'openingTime' => [
                'monday' => $this->zasilkovna->getOpeningTime()->getMonday(),
                'tuesday' => $this->zasilkovna->getOpeningTime()->getTuesday(),
                'wednesday' => $this->zasilkovna->getOpeningTime()->getWednesday(),
                'thursday' => $this->zasilkovna->getOpeningTime()->getThursday(),
                'friday' => $this->zasilkovna->getOpeningTime()->getFriday(),
                'saturday' => $this->zasilkovna->getOpeningTime()->getSaturday(),
                'sunday' => $this->zasilkovna->getOpeningTime()->getSunday(),
                'breakTime' => $this->zasilkovna->getOpeningTime()->getBreakTime()
            ]
        ];

        return $result;
    }
}
