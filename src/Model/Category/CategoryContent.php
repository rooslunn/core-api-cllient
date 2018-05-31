<?php

namespace Pilulka\CoreApiClient\Model\Category;

class CategoryContent
{
    /** @var  string|null */
    private $long;

    /**
     * @return null|string
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param null|string $long
     * @return CategoryContent
     */
    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }
}
