<?php

namespace Pilulka\CoreApiClient\Model\Product;

/**
 * Class Product
 * @package Pilulka\CoreApi\Domain\Model\Product
 */
class Product
{
    const REL_CATALOG = 1;
    const REL_SUPPLIER = 2;
    const REL_PRODUCT_LINE = 3;
    const REL_PHARMACY = 4;
    const REL_PARAM = 5;
    const REL_CATEGORY = 6;
    const REL_BRAND = 7;
    const REL_USAGE_TYPE = 8;
    const REL_MANUFACTURER = 9;

    const STATUS_AVAILABLE = 1;

    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  string|null */
    private $sellingName;

    /** @var  float */
    private $price;

    /** @var float */
    private $priceDiscount;

    /** @var  int */
    private $vat;

    /** @var  string */
    private $availability;

    /** @var  int */
    private $amountInStock;

    /** @var  int */
    private $rate;

    /** @var  string */
    private $image;

    /** @var  int */
    private $advantage;

    /** @var  string|null */
    private $packSize;

    /** @var  int */
    private $status;

    /** @var  \DateTime */
    private $updatedAt;

    /** @var  ProductAttributes */
    private $attributes;

    /** @var  ProductContent */
    private $content;

    /** @var  array */
    private $relations;

    /** @var float|null */
    private $averageRating;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Product
     */
    public function setId(int $id): Product
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
     * @return Product
     */
    public function setName(string $name): Product
    {
        $this->name = trim($name);
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSellingName()
    {
        return $this->sellingName;
    }

    /**
     * @param null|string $sellingName
     * @return Product
     */
    public function setSellingName($sellingName)
    {
        $this->sellingName = trim($sellingName);
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Product
     */
    public function setPrice(float $price): Product
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceDiscount(): ?float
    {
        return $this->priceDiscount;
    }

    /**
     * @param float|null $priceDiscount
     * @return Product
     */
    public function setPriceDiscount($priceDiscount): Product
    {
        $this->priceDiscount = $priceDiscount;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPercentDiscount(): ?int
    {
        $price = $this->getPrice();
        $priceDiscount = $this->getPriceDiscount();
        return !$priceDiscount || !$price ? null : round(100 - ($price / ($priceDiscount / 100)));
    }

    /**
     * @return int
     */
    public function getVat(): int
    {
        return $this->vat;
    }

    /**
     * @param int $vat
     * @return Product
     */
    public function setVat(int $vat): Product
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvailability(): string
    {
        return $this->availability;
    }

    /**
     * @param string $availability
     * @return Product
     */
    public function setAvailability(string $availability): Product
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmountInStock(): int
    {
        return $this->amountInStock;
    }

    /**
     * @param int $amountInStock
     * @return Product
     */
    public function setAmountInStock(int $amountInStock): Product
    {
        $this->amountInStock = $amountInStock;
        return $this;
    }

    /**
     * @return int
     */
    public function getRate(): ?int
    {
        return $this->rate;
    }

    /**
     * @param int|null $rate
     * @return Product
     */
    public function setRate($rate): Product
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        $info = parse_url($this->image);

        return $info ? $info['path'] : $this->image;
    }

    /**
     * @param string|null $image
     * @return Product
     */
    public function setImage(?string $image): Product
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvantage(): int
    {
        return $this->advantage;
    }

    /**
     * @param int $advantage
     * @return Product
     */
    public function setAdvantage(int $advantage): Product
    {
        $this->advantage = $advantage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPackSize(): ?string
    {
        return (string)$this->packSize;
    }

    /**
     * @param string|null $packSize
     * @return Product
     */
    public function setPackSize(?string $packSize): Product
    {
        $this->packSize = $packSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return Product
     */
    public function setStatus(int $status): Product
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Product
     */
    public function setUpdatedAt(\DateTime $updatedAt): Product
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return ProductAttributes
     */
    public function getAttributes(): ProductAttributes
    {
        return $this->attributes;
    }

    /**
     * @param ProductAttributes $attributes
     * @return Product
     */
    public function setAttributes(ProductAttributes $attributes): Product
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return ProductContent
     */
    public function getContent(): ProductContent
    {
        return $this->content;
    }

    /**
     * @param ProductContent $content
     * @return Product
     */
    public function setContent(ProductContent $content): Product
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return array
     */
    public function getRelations(): array
    {
        return $this->relations;
    }

    /**
     * @param array $relations
     * @return Product
     */
    public function setRelations(array $relations): Product
    {
        foreach ($relations as $relId => $rel) {
            $this->relations[(int)$relId] = $rel;
        }

        return $this;
    }

    /**
     * @return null|int
     */
    public function getBrandId()
    {
        $relations = $this->getRelations();

        if (isset($relations[self::REL_BRAND])) {
            return $relations[self::REL_BRAND][0];
        }

        return null;
    }

    /**
     * @return null|int
     */
    public function getProductLineId()
    {
        $relations = $this->getRelations();

        if (isset($relations[self::REL_PRODUCT_LINE])) {
            return $relations[self::REL_PRODUCT_LINE][0];
        }

        return null;
    }

    /**
     * @return null|int
     */
    public function getSupplierId()
    {
        $relations = $this->getRelations();

        if (isset($relations[self::REL_SUPPLIER])) {
            return $relations[self::REL_SUPPLIER][0];
        }

        return null;
    }

    /**
     * @return null|int
     */
    public function getManufacturerId()
    {
        $relations = $this->getRelations();

        if (isset($relations[self::REL_MANUFACTURER])) {
            return $relations[self::REL_MANUFACTURER][0];
        }

        return null;
    }

    /**
     * @return null|int
     */
    public function getPharmacyIds()
    {
        $relations = $this->getRelations();

        if (isset($relations[self::REL_PHARMACY])) {
            return $relations[self::REL_PHARMACY];
        }

        return null;
    }

    /**
     * @return null|int
     */
    public function getCategoryIds()
    {
        $relations = $this->getRelations();

        if (isset($relations[self::REL_CATEGORY])) {
            return $relations[self::REL_CATEGORY];
        }

        return null;
    }

    /**
     * @return null|int
     */
    public function getParamIds()
    {
        $relations = $this->getRelations();

        if (isset($relations[self::REL_PARAM])) {
            return $relations[self::REL_PARAM];
        }

        return null;
    }

    /**
     * @return float|null
     */
    public function getAverageRating(): ?float
    {
        return $this->averageRating;
    }

    /**
     * @param float|null $averageRating
     */
    public function setAverageRating(?float $averageRating)
    {
        $this->averageRating = $averageRating;
    }
}
