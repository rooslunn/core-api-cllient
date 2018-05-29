<?php

namespace Pilulka\CoreApiClient\Model\BonusProduct;

/**
 * Class BonusProductTypeValues
 * @package Pilulka\CoreApiClient\Model\BonusProduct
 */
class BonusProductTypeValues
{
    const SINGLE_PRODUCT_TYPE = 0;
    const MULTIPLE_PRODUCT_TYPE = 1;
    const NOTE_PRODUCT_TYPE = 2;

    /**
     * @param BonusProduct $bonusProduct
     * @return bool
     */
    public static function isEachTypeValid(BonusProduct $bonusProduct)
    {
        if (!in_array($bonusProduct->getType(), self::getConstantsArrayByPrefix())) {
            return false;
        }
        return true;
    }

    /**
     * @return array
     */
    private static function getConstantsArrayByPrefix()
    {
        $r = new \ReflectionClass(get_called_class());
        $arr = [];
        foreach ($r->getConstants() as $key => $value) {
            $arr[$value] = $value;
        }
        return $arr;
    }
}
