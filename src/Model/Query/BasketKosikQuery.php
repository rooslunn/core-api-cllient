<?php


namespace Pilulka\CoreApiClient\Model\Query;


final class BasketKosikQuery
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
    public function setQuery(string $uid, int $userId): BasketKosikQuery
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
    public function setFields(array $fields): BasketKosikQuery
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @param int $size
     * @return BasketKosikQuery
     */
    public function setSize(int $size): BasketKosikQuery
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @param int $from
     * @return BasketKosikQuery
     */
    public function setFrom(int $from): BasketKosikQuery
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @param array $sort
     * @return BasketKosikQuery
     */
    public function setSort(array $sort): BasketKosikQuery
    {
        $this->sort = $sort;
        return $this;
    }
}