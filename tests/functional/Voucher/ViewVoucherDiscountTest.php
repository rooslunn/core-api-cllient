<?php

namespace Voucher;

use Pilulka\CoreApiClient\Command\ProductFavorite\ViewProductFavoriteList;
use Pilulka\CoreApiClient\Command\ProductLine\ViewProductLines;
use Pilulka\CoreApiClient\Command\Voucher\ViewVoucherDiscount;
use Pilulka\CoreApiClient\JsonApiClient;
use \Codeception\Test\Unit;
use Pilulka\CoreApiClient\Model\ProductFavorite\ProductFavorite;
use Pilulka\CoreApiClient\Model\ProductLine\ProductLine;
use Pilulka\CoreApiClient\Model\Voucher\Voucher;

class ViewVoucherDiscountTest extends Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @throws \Exception
     */
    public function testViewVoucherDiscount(): void
    {
        $code = 'X5YNHU';
        $categoryId = [1];
        $productId = [1];
        $deliveryMethod = 1;
        $price = 10.0;

        $response = (new JsonApiClient(CORE_API_URL_BASE))
            ->send(new ViewVoucherDiscount($code, $categoryId, $productId, $deliveryMethod, $price));

        $this->assertInstanceOf(Voucher::class, $response);
    }
}
