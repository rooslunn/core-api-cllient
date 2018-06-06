<?php

namespace Pilulka\CoreApiClient\Model\Comment;

class Comment
{
    const TYPE_PRODUCT = 1;


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
    /** @var bool */
    private $isPublic;
    /** @var  */
    private $isValidate;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Comment
     */
    public function setId(int $id): Comment
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Comment
     */
    public function setType(int $type): Comment
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getObjectId(): int
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     * @return Comment
     */
    public function setObjectId(int $objectId): Comment
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     * @return Comment
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Comment
     */
    public function setName(string $name): Comment
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     * @return Comment
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return CommentContent
     */
    public function getContent(): CommentContent
    {
        return $this->content;
    }

    /**
     * @param CommentContent $content
     * @return Comment
     */
    public function setContent(CommentContent $content): Comment
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Comment
     */
    public function setUpdatedAt(\DateTime $updatedAt): Comment
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return Comment
     */
    public function setIp(string $ip): Comment
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     * @return Comment
     */
    public function setRating(int $rating): Comment
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isPublic(): ?bool
    {
        return $this->isPublic;
    }

    /**
     * @param bool|null $isPublic
     * @return Comment
     */
    public function setIsPublic(?bool $isPublic): Comment
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isValidate(): ?bool
    {
        return $this->isValidate;
    }

    /**
     * @param bool|null $isValidate
     * @return Comment
     */
    public function setIsValidate(?bool $isValidate)
    {
        $this->isValidate = $isValidate;
        return $this;
    }
}
