<?php


namespace Pilulka\CoreApiClient\Model\Manufacturer;


class Manufacturer
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  ManufacturerContent */
    private $content;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Manufacturer
     */
    public function setId(int $id): Manufacturer
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
     * @return Manufacturer
     */
    public function setName(string $name): Manufacturer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return ManufacturerContent
     */
    public function getContent(): ManufacturerContent
    {
        return $this->content;
    }

    /**
     * @param ManufacturerContent $content
     * @return Manufacturer
     */
    public function setContent(ManufacturerContent $content): Manufacturer
    {
        $this->content = $content;
        return $this;
    }


}