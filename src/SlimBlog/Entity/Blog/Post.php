<?php

namespace SlimBlog\Entity\Blog;

class Post
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var \DateTime
     */
    protected $publishedAt;
    /**
     * @var bool
     */
    protected $isActive;

    /**
     * @param int $id
     * @param string $title
     * @param string $content
     * @param \DateTime $createdAt
     * @param \DateTime $publishedAt
     * @param \DateTime $updatedAt
     * @param bool $isActive
     */
    public function __contruct(
        $id,
        $title,
        $content,
        \DateTime $createdAt,
        \DateTime $publishedAt,
        \DateTime $updatedAt,
        $isActive = true
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->publishedAt = $publishedAt;
        $this->isActive = $isActive;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}