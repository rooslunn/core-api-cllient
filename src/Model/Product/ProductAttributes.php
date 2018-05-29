<?php

namespace Pilulka\CoreApiClient\Model\Product;

/**
 * Class ProductAttributes
 * @package Pilulka\CoreApi\Domain\Model\Product
 */
class ProductAttributes
{
    /** @var  string */
    private $ean;

    /** @var  string|null */
    private $sukl;

    /** @var  string|null */
    private $rrp;

    /** @var  bool */
    private $isInBonus;

    /** @var  bool */
    private $isInTv;

    /** @var  bool */
    private $isRecommended;

    /** @var  bool */
    private $isInAction;

    /** @var  bool */
    private $isFreeSale;

    /** @var  bool */
    private $isGift;

    /** @var  bool */
    private $isIgnoredByGoogle;

    /** @var  bool */
    private $isIgnoredByEdenred;

    /** @var  bool */
    private $isIgnoredBySodexo;

    /** @var  bool */
    private $hasFreeDelivery;

    /** @var  bool */
    private $hasExtendedWarranty;

    /** @var  array */
    private $similarProducts;

    /** @var  bool */
    private $isPilulkaCar;

    /** @var  bool */
    private $isPharmacyPickupAvailable;

    /**
     * @return string|null
     */
    public function getEan(): ?string
    {
        return $this->ean;
    }

    /**
     * @param string|null $ean
     * @return ProductAttributes
     */
    public function setEan(?string $ean): ProductAttributes
    {
        $this->ean = $ean;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSukl()
    {
        return $this->sukl;
    }

    /**
     * @param null|string $sukl
     * @return ProductAttributes
     */
    public function setSukl($sukl)
    {
        $this->sukl = $sukl;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRrp()
    {
        return $this->rrp;
    }

    /**
     * @param null|string $rrp
     * @return ProductAttributes
     */
    public function setRrp($rrp)
    {
        $this->rrp = $rrp;
        return $this;
    }


    /**
     * @return bool
     */
    public function isInBonus(): bool
    {
        return $this->isInBonus;
    }

    /**
     * @param bool $isInBonus
     * @return ProductAttributes
     */
    public function setIsInBonus(bool $isInBonus): ProductAttributes
    {
        $this->isInBonus = $isInBonus;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInTv(): bool
    {
        return $this->isInTv;
    }

    /**
     * @param bool $isInTv
     * @return ProductAttributes
     */
    public function setIsInTv(bool $isInTv): ProductAttributes
    {
        $this->isInTv = $isInTv;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRecommended(): bool
    {
        return $this->isRecommended;
    }

    /**
     * @param bool $isRecommended
     * @return ProductAttributes
     */
    public function setIsRecommended(bool $isRecommended): ProductAttributes
    {
        $this->isRecommended = $isRecommended;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInAction(): bool
    {
        return $this->isInAction;
    }

    /**
     * @param bool $isInAction
     * @return ProductAttributes
     */
    public function setIsInAction(bool $isInAction): ProductAttributes
    {
        $this->isInAction = $isInAction;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFreeSale(): bool
    {
        return $this->isFreeSale;
    }

    /**
     * @param bool $isFreeSale
     * @return ProductAttributes
     */
    public function setIsFreeSale(bool $isFreeSale): ProductAttributes
    {
        $this->isFreeSale = $isFreeSale;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGift(): bool
    {
        return $this->isGift;
    }

    /**
     * @param bool $isGift
     * @return ProductAttributes
     */
    public function setIsGift(bool $isGift): ProductAttributes
    {
        $this->isGift = $isGift;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIgnoredByGoogle(): bool
    {
        return $this->isIgnoredByGoogle;
    }

    /**
     * @param bool $isIgnoredByGoogle
     * @return ProductAttributes
     */
    public function setIsIgnoredByGoogle(bool $isIgnoredByGoogle): ProductAttributes
    {
        $this->isIgnoredByGoogle = $isIgnoredByGoogle;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIgnoredByEdenred(): bool
    {
        return $this->isIgnoredByEdenred;
    }

    /**
     * @param bool $isIgnoredByEdenred
     * @return ProductAttributes
     */
    public function setIsIgnoredByEdenred(bool $isIgnoredByEdenred): ProductAttributes
    {
        $this->isIgnoredByEdenred = $isIgnoredByEdenred;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIgnoredBySodexo(): bool
    {
        return $this->isIgnoredBySodexo;
    }

    /**
     * @param bool $isIgnoredBySodexo
     * @return ProductAttributes
     */
    public function setIsIgnoredBySodexo(bool $isIgnoredBySodexo): ProductAttributes
    {
        $this->isIgnoredBySodexo = $isIgnoredBySodexo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasFreeDelivery(): ?bool
    {
        return $this->hasFreeDelivery;
    }

    /**
     * @param bool $hasFreeDelivery
     * @return ProductAttributes
     */
    public function setHasFreeDelivery(bool $hasFreeDelivery): ProductAttributes
    {
        $this->hasFreeDelivery = $hasFreeDelivery;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasExtendedWarranty(): bool
    {
        return $this->hasExtendedWarranty;
    }

    /**
     * @param bool $hasExtendedWarranty
     * @return ProductAttributes
     */
    public function setHasExtendedWarranty(bool $hasExtendedWarranty): ProductAttributes
    {
        $this->hasExtendedWarranty = $hasExtendedWarranty;
        return $this;
    }

    /**
     * @return array
     */
    public function getSimilarProducts(): ?array
    {
        return $this->similarProducts;
    }

    /**
     * @param array $similarProducts
     * @return ProductAttributes
     */
    public function setSimilarProducts(array $similarProducts): ProductAttributes
    {
        $this->similarProducts = $similarProducts;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPilulkaCar(): bool
    {
        return $this->isPilulkaCar;
    }

    /**
     * @param bool $isPilulkaCar
     * @return ProductAttributes
     */
    public function setIsPilulkaCar(bool $isPilulkaCar): ProductAttributes
    {
        $this->isPilulkaCar = $isPilulkaCar;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPharmacyPickupAvailable(): bool
    {
        return $this->isPharmacyPickupAvailable;
    }

    /**
     * @param bool $isPharmacyPickupAvailable
     * @return ProductAttributes
     */
    public function setIsPharmacyPickupAvailable(bool $isPharmacyPickupAvailable): ProductAttributes
    {
        $this->isPharmacyPickupAvailable = $isPharmacyPickupAvailable;
        return $this;
    }
}
