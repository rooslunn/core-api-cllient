<?php
declare(strict_types=1);

namespace Pilulka\CoreApiClient\Model\Category;

class Category
{

    /** @var int */
    private $id;
    /** @var string */
    private $name;
    /** @var int|null */
    private $parentId;
    /** @var int */
    private $position;
    /** @var string */
    private $contetn;
    /** @var bool */
    private $isActive;
    /** @var bool */
    private $isDeleted;
    /** @var string */
    private $image;
    /** @var bool */
    private $isInMainMenu;
    /** @var array */
    private $filters;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
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
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param int|null $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition(int $position)
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getContetn(): string
    {
        return $this->contetn;
    }

    /**
     * @param string $contetn
     */
    public function setContetn(string $contetn)
    {
        $this->contetn = $contetn;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    /**
     * @param bool $isDeleted
     */
    public function setIsDeleted(bool $isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image)
    {
        $this->image = $image;
    }

    /**
     * @return bool
     */
    public function isInMainMenu(): bool
    {
        return $this->isInMainMenu;
    }

    /**
     * @param bool $isInMainMenu
     */
    public function setIsInMainMenu(bool $isInMainMenu)
    {
        $this->isInMainMenu = $isInMainMenu;
    }

    /**
     * @return array
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    /**
     * @param array $filters
     */
    public function setFilters(array $filters)
    {
        $this->filters = $filters;
    }

}
