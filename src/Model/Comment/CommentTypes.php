<?php

namespace Pilulka\CoreApiClient\Model\Comment;

use Pilulka\CoreApiClient\Model\JsonModel;

class CommentTypes extends JsonModel
{
    public const COMMENT_TYPE_PRODUCT = 1;
    public const COMMENT_TYPE_PAGE = 2;
}