<?php


namespace Pilulka\CoreApiClient\Model\User;

class UserFilterQuery
{
    /**
     * @var array|null
     */
    private $query;

    /**
     * @var array|null
     */
    private $fields;

    /**
     * @var int
     */
    private $size;

    /**
     * @var int
     */
    private $from;

    /**
     * @var array
     */
    private $sort;

    /**
     * UserFilterQuery constructor.
     * @param array $query
     * @param array $fields
     * @param int $size
     * @param int $from
     * @param array $sort
     */
    public function __construct(
        array $query = [],
        array $fields = [],
        int $size = 20,
        int $from = 0,
        array $sort = []
    ) {
        $this->query = $query;
        $this->fields = $fields;
        $this->size = $size;
        $this->from = $from;
        $this->sort = $sort;
    }


    /**
     * @return array
     */
    public function getQuery(): array
    {
        return $this->query;
    }

    /**
     * @return array|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @return array
     */
    public function getSort(): array
    {
        return $this->sort;
    }
}
