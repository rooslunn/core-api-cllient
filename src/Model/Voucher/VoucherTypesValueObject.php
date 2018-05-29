<?php

namespace Pilulka\CoreApiClient\Model\Voucher;

/**
 * Class VoucherTypesValueObject
 * @package Pilulka\CoreApiClient\Model\Voucher
 */
class VoucherTypesValueObject
{
    // Voucher voucher_type constants
    const VOUCHER_TYPE_PRODUCT = 1;
    const VOUCHER_TYPE_GIFT = 2;

    // Voucher limit_type constants
    const LIMIT_TYPE_ONCE = 1;
    const LIMIT_TYPE_REGISTERED_USER = 2;
    const LIMIT_TYPE_UNLIMITED = 3;

    // Voucher sale_type constants

    const SALE_TYPE_EXACT_AMOUNT = 1;
    const SALE_TYPE_PERCENTAGE_AMOUNT = 2;

    /**
     * @param Voucher $voucher
     * @return bool
     */
    public static function isEachTypeValid(Voucher $voucher)
    {
        if (!in_array($voucher->getVoucherType(), self::getConstantsArrayByPrefix('VOUCHER_'))) {
            return false;
        }
        if (!in_array($voucher->getLimitType(), self::getConstantsArrayByPrefix('LIMIT_'))) {
            return false;
        }
        if (!in_array($voucher->getSaleType(), self::getConstantsArrayByPrefix('SALE_'))) {
            return false;
        }
        return true;
    }

    /**
     * @param $prefix
     * @return array
     */
    private static function getConstantsArrayByPrefix($prefix)
    {
        $r = new \ReflectionClass(get_called_class());
        $arr = [];
        foreach ($r->getConstants() as $key => $value) {
            if (strpos($key, $prefix) !== false) {
                $arr[$value] = $value;
            }
        }
        return $arr;
    }
}
