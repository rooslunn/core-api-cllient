<?php

namespace Pilulka\CoreApiClient\Tests\utils;

use Pilulka\CoreApiClient\Model\Product\Product;
use Pilulka\CoreApiClient\Model\Product\ProductAttributes;
use Pilulka\CoreApiClient\Model\Product\ProductContent;

/**
 * Class ProductUtility
 * @package Pilulka\CoreApiClient\Tests\utils
 */
class ProductUtility
{
    /**
     * @return Product
     */
    public static function createProduct(): Product
    {
        $product = new Product();

        $product->setId(1);
        $product->setName('');
        $product->setSellingName('');
        $product->setPrice(2.0);
        $product->setPriceDiscount(0.2);
        $product->setVat(2222);
        $product->setAvailability('');
        $product->setAmountInStock(1);
        $product->setRate(5);
        $product->setImage('');
        $product->setAdvantage(1);
        $product->setPackSize('2');
        $product->setStatus(1);
        $product->setUpdatedAt(new \DateTime());
        $product->setRelations([1 => [1]]);
        $product->setAverageRating(5.0);
        $product->setContent(self::createContent());
        $product->setAttributes(self::createAttributes());

        return $product;
    }

    /**
     * @return ProductContent
     */
    public static function createContent(): ProductContent
    {
        $content = new ProductContent();

        $content->setShort('');
        $content->setLong('');
        $content->setSpc('');
        $content->setGift('');
        $content->setFiles([]);

        return $content;
    }

    /**
     * @return ProductAttributes
     */
    public static function createAttributes(): ProductAttributes
    {
        $attributes = new ProductAttributes();

        $attributes->setEan('');
        $attributes->setSukl('');
        $attributes->setRrp('');
        $attributes->setIsInBonus(true);
        $attributes->setIsInTv(true);
        $attributes->setIsRecommended(true);
        $attributes->setIsInAction(true);
        $attributes->setIsFreeSale(true);
        $attributes->setIsGift(true);
        $attributes->setIsIgnoredByGoogle(true);
        $attributes->setIsIgnoredByEdenred(true);
        $attributes->setIsIgnoredBySodexo(true);
        $attributes->setHasFreeDelivery(true);
        $attributes->setHasExtendedWarranty(true);
        $attributes->setSimilarProducts([]);
        $attributes->setIsPilulkaCar(true);
        $attributes->setIsPharmacyPickupAvailable(true);

        return $attributes;
    }
}
