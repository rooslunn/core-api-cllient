<?php

namespace Pilulka\CoreApiClient\Tests\utils;

use Pilulka\CoreApiClient\Model\Location\Location;
use Pilulka\CoreApiClient\Model\Zasilkovna\Zasilkovna;
use Pilulka\CoreApiClient\Model\Zasilkovna\ZasilkovnaOpeningHours;
use Pilulka\CoreApiClient\Model\Zasilkovna\ZasilkovnaOpeningTime;

/**
 * Class ZasilkovnaUtility
 * @package Pilulka\CoreApiClient\Tests\utils
 */
class ZasilkovnaUtility
{
    /**
     * @return Zasilkovna
     */
    public static function createZasilkovna(): Zasilkovna
    {
        $zasilkovna = new Zasilkovna;
        $openingTime = self::createOpeningTime();
        $openingHours = self::createOpeningHours();

        $zasilkovna->setId(1);
        $zasilkovna->setName('');
        $zasilkovna->setNameStreet('');
        $zasilkovna->setPlace('');
        $zasilkovna->setStreet('');
        $zasilkovna->setCity('');
        $zasilkovna->setZip('');
        $zasilkovna->setCountry('');
        $zasilkovna->setCurrency('');
        $zasilkovna->setIsWheelchairAccessible(true);
        $zasilkovna->setLocation((new Location())->setLat(23222.3)->setLon(23223.3));
        $zasilkovna->setUrl('');
        $zasilkovna->setDressingRoom(1);
        $zasilkovna->setClaimAssistant(1);
        $zasilkovna->setPacketConsignment(1);
        $zasilkovna->setMaxWeight(1.2);
        $zasilkovna->setPhotos([]);
        $zasilkovna->setOpeningHours($openingHours);
        $zasilkovna->setDirections('');
        $zasilkovna->setDirectionsPublic('');
        $zasilkovna->setSpecial('');
        $zasilkovna->setDirectionsCar('');
        $zasilkovna->setHolidayStart('');
        $zasilkovna->setHolidayEnd('');
        $zasilkovna->setNoticeMessage('');
        $zasilkovna->setOpenSince('');
        $zasilkovna->setUpdatedAt(new \DateTime());
        $zasilkovna->setCreatedAt(new \DateTime());
        $zasilkovna->setDistance(0);
        $zasilkovna->setRegion('');
        $zasilkovna->setOpeningTime($openingTime);

        return $zasilkovna;
    }

    /**
     * @return ZasilkovnaOpeningTime
     */
    public static function createOpeningTime(): ZasilkovnaOpeningTime
    {
        $openingTime = new ZasilkovnaOpeningTime();
        $openingTime->setMonday('');
        $openingTime->setTuesday('');
        $openingTime->setWednesday('');
        $openingTime->setThursday('');
        $openingTime->setFriday('');
        $openingTime->setSaturday('');
        $openingTime->setSunday('');
        $openingTime->setBreakTime('');

        return $openingTime;
    }

    /**
     * @return ZasilkovnaOpeningHours
     */
    public static function createOpeningHours(): ZasilkovnaOpeningHours
    {
        $openingHours = new ZasilkovnaOpeningHours();
        $openingHours->setCompactShort('');
        $openingHours->setCompactLong('');
        $openingHours->setTableLong('');

        return $openingHours;
    }
}
