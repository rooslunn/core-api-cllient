<?php
declare(strict_types=1);

namespace Pilulka\CoreApiClient\Model\Category;

class Category
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  int|null */
    private $parentId;

    /** @var  int */
    private $position;

    /** @var  CategoryContent */
    private $content;

    /** @var  bool */
    private $isActive;

    /** @var  bool */
    private $isDeleted;

    /** @var  string */
    private $image;

    /** @var  bool */
    private $inMainMenu;

    /** @var CategoryFilter[]|null */
    private $filters;

    /** @var CategoryFrontendArticle[] */
    private $frontendArticles;

    /** @var Category[] */
    private $categories;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Category
     */
    public function setId(int $id): Category
    {
        $this->id = $id;
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
     * @return Category
     */
    public function setName(string $name): Category
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getParentId()
    {
        return (int)$this->parentId;
    }

    /**
     * @param int|null $parentId
     * @return Category
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @param int|null $position
     * @return Category
     */
    public function setPosition(?int $position): Category
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return CategoryContent
     */
    public function getContent(): CategoryContent
    {
        return $this->content;
    }

    /**
     * @param CategoryContent $content
     * @return Category
     */
    public function setContent(CategoryContent $content): Category
    {
        $this->content = $content;
        return $this;
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
     * @return Category
     */
    public function setIsActive(bool $isActive): Category
    {
        $this->isActive = $isActive;
        return $this;
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
     * @return Category
     */
    public function setIsDeleted(bool $isDeleted): Category
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image)
    {
        $this->image = $image;
    }

    /**
     * @return bool
     */
    public function isInMainMenu(): bool
    {
        return $this->inMainMenu;
    }

    /**
     * @param bool $inMainMenu
     * @return Category
     */
    public function setInMainMenu(bool $inMainMenu): Category
    {
        $this->inMainMenu = $inMainMenu;
        return $this;
    }

    /**
     * @return null|CategoryFilter[]
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }

    /**
     * @param null|CategoryFilter[] $filters
     * @return Category
     */
    public function setFilters(?array $filters): Category
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * @return CategoryFrontendArticle[]|null
     */
    public function getFrontendArticles(): ?array
    {
        return $this->frontendArticles;
    }

    /**
     * @param CategoryFrontendArticle[]|null $frontendArticles
     * @return Category
     */
    public function setFrontendArticles(?array $frontendArticles): Category
    {
        $this->frontendArticles = $frontendArticles;
        return $this;
    }

    /**
     * @return Category[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param Category[] $categories
     * @return Category
     */
    public function setCategories(array $categories): Category
    {
        $this->categories = $categories;
        return $this;
    }

}
