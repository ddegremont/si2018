<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SPARepository")
 */
class SPA
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
     * @var null|string
     *
     * @ORM\Column(type="string", length=150)
     *
     * @Assert\NotBlank(message="Le slug ne peut pas être vide.")
     * @Assert\Length(max="150", maxMessage="Le slug ne peut contenir plus de {{ limit }} caractères.")
     */
    private $slug;

    /**
     * Hostel constructor.
     */
    public function __construct()
    {
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
     * @return SPA
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
     * @return SPA
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
     * @return SPA
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
     * @return SPA
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

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
     * @return SPA
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function __toString(): string
    {
        return $this->title;
    }
}
