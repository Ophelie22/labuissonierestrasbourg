<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
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

    #[ORM\Column(type: 'string', length: 50)]
    private $color;

    //#[ORM\ManyToMany(targetEntity: Delegue::class, mappedBy: 'categories')]
    //private $delegues;

    #[ORM\OneToMany(mappedBy: 'Categories', targetEntity: User::class)]
    private $users;


    public function __construct()
    {
       // $this->delegues = new ArrayCollection();
        $this->users = new ArrayCollection();
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

    // /**
    // /* @return Collection<int, Delegue>
    //  */
    // public function getDelegue(): Collection
    // {
    //     return $this->delegues;
    // }

    // public function addDelegue(Delegue $delegue): self
    // {
    //     if (!$this->delegues->contains($delegue)) {
    //         $this->delegues[] = $delegue;
    //     }

    //     return $this;
    // }

    // public function removeDelegue(Delegue $delegue): self
    // {
    //     $this->delegues->removeElement($delegue);

    //     return $this;
    // }
    // public function __toString(): string
    // {
    //     return $this->name . "(" . $this->id . ")" ;
    // }

    
    
}
