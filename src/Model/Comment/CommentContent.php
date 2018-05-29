<?php

namespace Pilulka\CoreApiClient\Model\Comment;

/**
 * Class CommentContent
 * @package Pilulka\CoreApiClient\Model\Comment
 */
class CommentContent
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
     * @return CommentContent
     */
    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }
}
