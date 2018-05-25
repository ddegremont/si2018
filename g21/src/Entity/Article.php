<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 * @ORM\Table(name="si4_travel_article")
 */
class Article
{
    /**
     * @var null|int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(type="datetime")
     *
     * @Assert\DateTime()
     */
    private $creationTime;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=110)
     *
     * @Assert\NotBlank(message="Le titre ne peut pas être vide.")
     * @Assert\Length(max="110", maxMessage="Le titre ne peut contenir plus de {{ limit }} caractères.")
     */
    private $title;

    /**
     * @var null|string
     *
     * @ORM\Column(type="text")
     *
     * @Assert\NotBlank(message="La description ne peut pas être vide.")
     */
    private $shortDescription;

    /**
     * @var null|string[]
     *
     * @ORM\Column(type="text")
     *
     * @Assert\NotBlank(message="Le contenu ne peut pas être vide.")
     */
    private $content;

    /**
     * @var array
     *
     * @ORM\Column(type="array")
     */
    private $tags;

    /**
     * @var null|string
     *
     * @ORM\Column(type="string", length=150)
     *
     * @Assert\NotBlank(message="Le slug ne peut pas être vide.")
     * @Assert\Length(max="150", maxMessage="Le slug ne peut contenir plus de {{ limit }} caractères.")
     */
    private $slug;

    /**
     * @var null|ArticleCategory
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ArticleCategory", inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $articleCategory;

    /**
     * Article constructor.
     */
    public function __construct()
    {
        $this->tags = [];
        $this->creationTime = new \DateTime();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getCreationTime(): ?\DateTimeInterface
    {
        return $this->creationTime;
    }

    /**
     * @param \DateTimeInterface $creationTime
     *
     * @return Article
     */
    public function setCreationTime(\DateTimeInterface $creationTime): self
    {
        $this->creationTime = $creationTime;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Article
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        $this->slug = preg_replace('/\s+/', '-', mb_strtolower(trim(strip_tags($title)), 'UTF-8'));;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     *
     * @return Article
     */
    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return Article
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     *
     * @return Article
     */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @param string $tag
     *
     * @return Article
     */
    public function addTag(string $tag): self
    {
        if (false === \array_search($tag, $this->tags, true)) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    /**
     * @param string $tag
     *
     * @return Article
     */
    public function removeTag(string $tag): self
    {
        if (false !== ($tagIndex = \array_search($tag, $this->tags, true))) {
            unset($this->tags[$tagIndex]);
        }

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return Article
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return ArticleCategory|null
     */
    public function getArticleCategory(): ?ArticleCategory
    {
        return $this->articleCategory;
    }

    /**
     * @param ArticleCategory|null $articleCategory
     *
     * @return Article
     */
    public function setArticleCategory(?ArticleCategory $articleCategory): self
    {
        $this->articleCategory = $articleCategory;

        return $this;
    }

    public function __toString(): string
    {
        return $this->title;
    }
}
