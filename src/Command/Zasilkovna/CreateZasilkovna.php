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
        /**
         * @TODO Move to separate class
         */
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
            'isWheelchairAccessible' => $this->zasilkovna->isWheelchairAccessible(),
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

        return \GuzzleHttp\json_encode($result);
    }
}
