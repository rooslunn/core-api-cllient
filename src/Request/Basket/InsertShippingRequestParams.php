<?php


namespace Pilulka\CoreApiClient\Request\Basket;


final class InsertShippingRequestParams
{
    /** @var int */
    private $shippingId;

    /** @var array */
    private $shippingData;

    /** @var int */
    private $payId;

    /** @var bool */
    private $useCredit;

    /**
     * @param int $shippingId
     * @return InsertShippingRequestParams
     */
    public function setShippingId(int $shippingId): InsertShippingRequestParams
    {
        $this->shippingId = $shippingId;
        return $this;
    }

    /**
     * @param array $shippingData
     * @return InsertShippingRequestParams
     */
    public function setShippingData(array $shippingData): InsertShippingRequestParams
    {
        $this->shippingData = $shippingData;
        return $this;
    }

    /**
     * @param int $payId
     * @return InsertShippingRequestParams
     */
    public function setPayId(int $payId): InsertShippingRequestParams
    {
        $this->payId = $payId;
        return $this;
    }

    /**
     * @param bool $useCredit
     * @return InsertShippingRequestParams
     */
    public function setUseCredit(bool $useCredit): InsertShippingRequestParams
    {
        $this->useCredit = $useCredit;
        return $this;
    }
}