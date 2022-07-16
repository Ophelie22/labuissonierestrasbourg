<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[UniqueEntity('email')]
#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\EntityListeners(['App\EntityListener\UserListener'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank()]
    #[Assert\Length(min: 2, max: 50)]
    private string $fullName;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    #[Assert\Length(min: 2, max: 50)]
    private ?string $pseudo = null;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    #[Assert\Email()]
    #[Assert\Length(min: 2, max: 180)]
    private string $email;

    #[ORM\Column(type: 'json')]
    #[Assert\NotNull()]
    private array $roles = [];

    private ?string $plainPassword = null;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank()]
    private string $password = 'password';

    #[ORM\Column(type: 'datetime_immutable')]
    #[Assert\NotNull()]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime_immutable')]
    #[Assert\NotNull()]
    private \DateTimeImmutable $updatedAt;

    // #[ORM\OneToMany(mappedBy: 'user', targetEntity: Category::class, orphanRemoval: true)]
    // private $categories;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Category::class, orphanRemoval: true)]
    private $articles;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Mark::class, orphanRemoval: true)]
    private $marks;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Category::class)]
    private $categories;

   

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
        $this->categories = new ArrayCollection();
        $this->articles = new ArrayCollection();
        $this->marks = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return (string) $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(?string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get the value of plainPassword.
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Set the value of plainPassword.
     *
     * @return self
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setUser($this);
        }

        return $this;
    }

     public function removeArticle(Article $category): self
     {
         if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
             if ($category->getUser() === $this) {
                 $category->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Mark>
     */
    public function getMarks(): Collection
    {
        return $this->marks;
    }

    public function addMark(Mark $mark): self
    {
        if (!$this->marks->contains($mark)) {
            $this->marks[] = $mark;
            $mark->setUser($this);
        }

        return $this;
    }

    public function removeMark(Mark $mark): self
    {
        if ($this->marks->removeElement($mark)) {
            // set the owning side to null (unless already changed)
            if ($mark->getUser() === $this) {
                $mark->setUser(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->fullName;
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
            $category->setUser($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getUser() === $this) {
                $category->setUser(null);
            }
        }

        return $this;
    }

}
