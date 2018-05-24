<?php


namespace Pilulka\CoreApiClient\Model\Comment;

use Pilulka\CoreApiClient\Model\JsonModel;

class Comments extends JsonModel
{
    /** @var int  */
    private $total = 0;

    /** @var Comment[]  */
    private $comments = [];
}
