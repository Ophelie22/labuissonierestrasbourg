<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[UniqueEntity('name')]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $slug;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $color;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'categories')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    // #[ORM\ManyToOne(targetEntity: User::class)]
    // private $user;
    // #[ORM\ManyToMany(targetEntity: Delegue::class, mappedBy: 'categories')]
    // private $delegues;

    public function __construct()
    {
        // $this->delegues = new ArrayCollection();
         $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
      public function __toString()
    {
        return $this->name;
    }
}
    