<?php


namespace Pilulka\CoreApiClient\Model\Comment;

use Pilulka\CoreApiClient\Model\JsonModel;

class Comment extends JsonModel
{
    private const TYPE_PRODUCT = 1;

    /** @var  int */
    private $id;

    /** @var  int */
    private $type;

    /** @var  int */
    private $objectId;

    /** @var  int|null */
    private $userId;

    /** @var  string */
    private $name;

    /** @var  string|null */
    private $email;

    /** @var  CommentContent */
    private $content;

    /** @var  \DateTime */
    private $updatedAt;

    /** @var  string */
    private $ip;

    /** @var  int */
    private $rating;
}
