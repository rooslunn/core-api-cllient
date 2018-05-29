<?php


namespace Pilulka\CoreApiClient\Model\Supplier;

use Pilulka\CoreApiClient\Model\Supplier\SupplierContent;

class Supplier
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  string|null */
    private $logo;

    /** @var  SupplierContent */
    private $content;

    /** @var  string|null */
    private $website;

    /** @var  int|null */
    private $manufacturerId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Supplier
     */
    public function setId(int $id): Supplier
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Supplier
     */
    public function setName(string $name): Supplier
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param null|string $logo
     * @return Supplier
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return SupplierContent
     */
    public function getContent(): SupplierContent
    {
        return $this->content;
    }

    /**
     * @param SupplierContent $content
     * @return Supplier
     */
    public function setContent(SupplierContent $content): Supplier
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param null|string $website
     * @return Supplier
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return int
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * @param int|null $manufacturerId
     * @return Supplier
     */
    public function setManufacturerId($manufacturerId): Supplier
    {
        $this->manufacturerId = $manufacturerId;
        return $this;
    }
}
