<?php

namespace Pilulka\CoreApiClient\Command\Comment;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;
use Pilulka\Shop\Domain\Model\Comment\CommentTypes;

class ViewComments implements Request
{
    private const uri = '/comment';

    /** @var CommentTypes */
    private $type;

    /** @var int */
    private $objectId;

    /** @var bool  */
    private $isPublic;

    /** @var bool  */
    private $isValidate;

    /** @var int  */
    private $from;

    /** @var int  */
    private $size;

    public function __construct(
        int $type, int $objectId,
        bool $isPublic=false, bool $isValidate=false,
        int $from=0, int $size=20)
    {
        $this->type = $type;
        $this->objectId = $objectId;
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
        return self::uri . "/{$this->type}/{$this->objectId}"
            . "?isPublic={$this->isPublic}&sValidate={$this->isValidate}"
            . "&from={$this->from}&size={$this->size}";
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }
}