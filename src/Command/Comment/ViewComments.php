<?php

namespace Pilulka\CoreApiClient\Command\Comment;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;
use Pilulka\CoreApiClient\Model\Comment\CommentTypes;

class ViewComments implements Request
{
    private const URI = '/comment';

    /** @var CommentTypes */
    private $type;

    /** @var int|null */
    private $objectId;

    /** @var int|null */
    private $userId;

    /** @var bool  */
    private $isPublic;

    /** @var bool  */
    private $isValidate;

    /** @var int  */
    private $from;

    /** @var int  */
    private $size;

    public function __construct(
        int $type,
        $objectId = null,
        $userId = null,
        bool $isPublic = false,
        bool $isValidate = false,
        int $from = 0,
        int $size = 20
    ) {
        $this->type = $type;
        $this->objectId = $objectId;
        $this->userId = $userId;
        $this->isPublic = $isPublic;
        $this->isValidate = $isValidate;
        $this->from = $from;
        $this->size = $size;
    }
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::GET;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        $url = self::URI . "/{$this->type}"
            . "?isPublic={$this->isPublic}&sValidate={$this->isValidate}"
            . "&from={$this->from}&size={$this->size}";

        if (!is_null($this->userId)) {
            $url .= "?userId={$this->userId}";
        }
        if (!is_null($this->userId)) {
            $url .= "?objectId={$this->objectId}";
        }

        return $url;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}
