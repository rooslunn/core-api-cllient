<?php

namespace Pilulka\CoreApiClient\Command\Zasilkovna;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewZasilkovnaList implements Request
{
    private const URI = '/zasilkovna/list';

    const TYPE_ALL = 'all';

    const MAX_SIZE = 5000;

    /** @var float */
    private $lat = null;

    /** @var float */
    private $lon = null;

    /** @var string */
    private $type = self::TYPE_ALL;

    /** @var bool */
    private $openNow = false;

    /** @var bool */
    private $openSaturday = false;

    /** @var bool */
    private $openSunday = false;

    /** @var int|null */
    private $region = null;

    /** @var string|null  */
    private $query = null;

    /** @var int  */
    private $size = self::MAX_SIZE;

    /** @var int  */
    private $from = 0;

    /**
     * ViewZasilkovnaList constructor.
     * @param null|string $query
     * @param int $from
     * @param int $size
     * @param int $lat
     * @param int $lon
     */
    public function __construct(?string $query = null, ?int $from = 0, ?int $size = self::MAX_SIZE, $lat = 0, $lon = 0)
    {
        $this->query = $query;
        $this->from = $from;
        $this->size = !$size || $size > self::MAX_SIZE ? self::MAX_SIZE : $size;
        $this->lat = $lat;
        $this->lon = $lon;
    }

    /**
     * @return float
     */
    public function getLat(): ?float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     */
    public function setLat(float $lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return float
     */
    public function getLon(): ?float
    {
        return $this->lon;
    }

    /**
     * @param float $lon
     */
    public function setLon(float $lon)
    {
        $this->lon = $lon;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return boolean
     */
    public function isOpenNow(): bool
    {
        return $this->openNow;
    }

    /**
     * @param boolean $openNow
     */
    public function setOpenNow(bool $openNow)
    {
        $this->openNow = $openNow;
    }

    /**
     * @return boolean
     */
    public function isOpenSaturday(): bool
    {
        return $this->openSaturday;
    }

    /**
     * @param boolean $openSaturday
     */
    public function setOpenSaturday(bool $openSaturday)
    {
        $this->openSaturday = $openSaturday;
    }

    /**
     * @return boolean
     */
    public function isOpenSunday(): bool
    {
        return $this->openSunday;
    }

    /**
     * @param boolean $openSunday
     */
    public function setOpenSunday(bool $openSunday)
    {
        $this->openSunday = $openSunday;
    }

    /**
     * @return int|null
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param int|null $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return null|string
     */
    public function getQuery(): ?string
    {
        return $this->query;
    }

    /**
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @return int
     */
    public function getFrom(): ?int
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::GET;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URI . '?' . http_build_query([
                'query' => $this->query,
                'from' => $this->from,
                'size' => $this->size,
                'lat' => $this->lat,
                'lon' => $this->lon,
            ]);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}
