<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenuRepository::class)]
class Menu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $name;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $MenuOrder;

    #[ORM\Column(type: 'boolean')]
    private $isVisible;

    #[ORM\ManyToOne(targetEntity: Delegue::class)]
    private $delegue;

    #[ORM\ManyToOne(targetEntity: Category::class)]
    private $category;

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

    public function getMenuOrder(): ?int
    {
        return $this->MenuOrder;
    }

    public function setMenuOrder(?int $MenuOrder): self
    {
        $this->MenuOrder = $MenuOrder;

        return $this;
    }

    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }

    public function setIsVisible(bool $isVisible): self
    {
        $this->isVisible = $isVisible;

        return $this;
    }

    public function getDelegue(): ?Delegue
    {
        return $this->delegue;
    }

    public function setDelegue(?Delegue $delegue): self
    {
        $this->delegue = $delegue;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
