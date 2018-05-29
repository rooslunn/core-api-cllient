<?php

namespace Pilulka\CoreApiClient\Model\Product;

/**
 * Class ProductFile
 * @package Pilulka\CoreApi\Domain\Model\Product
 */
class ProductFile
{
    /** @var  string */
    private $url;

    /** @var  string */
    private $name;

    /** @var  int */
    private $type;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return ProductFile
     */
    public function setUrl(string $url): ProductFile
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return ProductFile
     */
    public function setName(?string $name): ProductFile
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return ProductFile
     */
    public function setType(int $type): ProductFile
    {
        $this->type = $type;
        return $this;
    }
}
