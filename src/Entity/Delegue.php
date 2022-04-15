<?php

namespace App\Entity;

//use App\Model\TimestampedInterface;
use App\Repository\DelegueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: DelegueRepository::class)]
class Delegue 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $title;

    #[ORM\Column(type: 'string', length: 50)]
    private $nomresponsable;

    #[ORM\Column(type: 'text', nullable: true)]
    private $content;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $featuredText;

    #[ORM\Column(type: 'datetime')]
    private $createdAt;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private \DateTime $updatedAt;

    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'delegues')]
    private $categories;

    #[ORM\ManyToOne(targetEntity: Media::class)]
    private $featuredDocument;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getNomresponsable(): ?string
    {
        return $this->nomresponsable;
    }

    public function setNomresponsable(string $nomresponsable): self
    {
        $this->nomresponsable = $nomresponsable;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getFeaturedText(): ?string
    {
        return $this->featuredText;
    }

    public function setFeaturedText(?string $featuredText): self
    {
        $this->featuredText = $featuredText;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->addDelegue($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->categories->removeElement($category)) {
            $category->removeDelegue($this);
        }

        return $this;
    }

    public function getFeaturedDocument(): ?Media
    {
        return $this->featuredDocument;
    }

    public function setFeaturedDocument(?Media $featuredDocument): self
    {
        $this->featuredDocument = $featuredDocument;

        return $this;
    }
      public function __toString(): string
    {
        return $this->nomresponsable;
    }
}
