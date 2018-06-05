<?php


namespace Pilulka\CoreApiClient\Request\Basket;


final class BasketKosikRequestParams
{
    /** @var array */
    private $query;

    /** @var array */
    private $fields;

    /** @var int */
    private $size;

    /** @var int */
    private $from;

    /** @var array */
    private $sort;

    /**
     * @param string $uid
     * @param int $userId
     * @return BasketKosikQuery
     */
    public function setQuery(string $uid, int $userId): BasketKosikRequestParams
    {
        $this->query = [
            'uid' => $uid,
            'userId' => $userId,
        ];
        return $this;
    }

    /**
     * @param array $fields
     * @return BasketKosikQuery
     */
    public function setFields(array $fields): BasketKosikRequestParams
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @param int $size
     * @return BasketKosikQuery
     */
    public function setSize(int $size): BasketKosikRequestParams
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @param int $from
     * @return BasketKosikQuery
     */
    public function setFrom(int $from): BasketKosikRequestParams
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @param array $sort
     * @return BasketKosikQuery
     */
    public function setSort(array $sort): BasketKosikRequestParams
    {
        $this->sort = $sort;
        return $this;
    }
}