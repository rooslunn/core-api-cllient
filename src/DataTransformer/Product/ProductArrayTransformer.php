<?php

namespace Pilulka\CoreApiClient\DataTransformer\Product;

use Pilulka\CoreApiClient\DataTransformer\DataTransformer;
use Pilulka\CoreApiClient\Model\Product\Product;

/**
 * Class ProductArrayTransformer
 * @package Pilulka\CoreApiClient\DataTransformer\Product
 */
class ProductArrayTransformer implements DataTransformer
{
    /**
     * @var Product
     */
    private $product;

    /**
     * ProductArrayTransformer constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return array
     */
    public function transform(): array
    {
        $data = [
            'id' => $this->product->getId(), // or null
            'name' => $this->product->getName(),
            'sellingName' => $this->product->getSellingName(),
            'price' => $this->product->getPrice(),
            'priceDiscount' => $this->product->getPriceDiscount(),
            'vat' => $this->product->getVat(),
            'availability' => $this->product->getAvailability(),
            'amountInStock' => $this->product->getAmountInStock(),
            'rate' => $this->product->getRate(),
            'image' => $this->product->getImage(),
            'advantage' => $this->product->getAdvantage(),
            'packSize' => $this->product->getPackSize(),
            'status' => $this->product->getStatus(),
            'updatedAt' => $this->product->getUpdatedAt()->getTimestamp(),
            'attributes' => [
                'ean' => $this->product->getAttributes()->getEan(),
                'sukl' => $this->product->getAttributes()->getSukl(),
                'rrp' => $this->product->getAttributes()->getRrp(),
                'isInBonus' => $this->product->getAttributes()->isInBonus(),
                'isInTv' => $this->product->getAttributes()->isInTv(),
                'isRecommended' => $this->product->getAttributes()->isRecommended(),
                'isInAction' => $this->product->getAttributes()->isInAction(),
                'isFreeSale' => $this->product->getAttributes()->isFreeSale(),
                'isGift' => $this->product->getAttributes()->isGift(),
                'isIgnoredByGoogle' => $this->product->getAttributes()->isIgnoredByGoogle(),
                'isIgnoredByEdenred' => $this->product->getAttributes()->isIgnoredByEdenred(),
                'isIgnoredBySodexo' => $this->product->getAttributes()->isIgnoredBySodexo(),
                'hasFreeDelivery' => $this->product->getAttributes()->getHasFreeDelivery(),
                'hasExtendedWarranty' => $this->product->getAttributes()->getHasExtendedWarranty(),
                'similarProducts' => $this->product->getAttributes()->getSimilarProducts(),
                'isPilulkaCar' => $this->product->getAttributes()->isPilulkaCar(),
                'isPharmacyPickupAvailable' => $this->product->getAttributes()->isPharmacyPickupAvailable(),
            ],
            'content' => [
                'short' => $this->product->getContent()->getShort(),
                'long' => $this->product->getContent()->getLong(),
                'spc' => $this->product->getContent()->getSpc(),
                'gift' => $this->product->getContent()->getGift(),
                'files' => $this->product->getContent()->getFiles()
            ],
            'relations' => $this->product->getRelations(),
            'brandId' => $this->product->getBrandId(),
            'productLineId' => $this->product->getProductLineId(),
            'supplierId' => $this->product->getSupplierId(),
            'manufacturerId' => $this->product->getManufacturerId(),
            'pharmacyIds' => $this->product->getPharmacyIds(),
            'categoryIds' => $this->product->getCategoryIds(),
            'paramIds' => $this->product->getParamIds(),
            'averageRating' => $this->product->getAverageRating()
        ];

        return $data;
    }
}
