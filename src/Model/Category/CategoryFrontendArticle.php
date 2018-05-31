<?php
namespace Pilulka\CoreApiClient\Model\Category;

class CategoryFrontendArticle
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $title;

    /** @var  string */
    private $link;

    /** @var  string */
    private $image;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CategoryFrontendArticle
     */
    public function setId(int $id): CategoryFrontendArticle
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return CategoryFrontendArticle
     */
    public function setTitle(string $title): CategoryFrontendArticle
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return CategoryFrontendArticle
     */
    public function setLink(string $link): CategoryFrontendArticle
    {
        $this->link = $link;
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
    public function setImage(string $image)
    {
        $this->image = $image;
    }
}
