<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use App\Repository\FilmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: FilmRepository::class)]
#[ApiResource(
    collectionOperations: [
        "get", "post"
    ],
    itemOperations:["get"],
    normalizationContext:['groups' => "film:read"],
    denormalizationContext:['groups' => "film:write"],
)]

class Film
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(["film:read", "user:read"])]
    private $id;

    #[ORM\Column(type: 'string', length: 180)]
    #[Groups(["film:read", "user:read"])]
    private $titre;

    #[ORM\Column(type: 'string', length: 180)]
    #[Groups(["film:read", "user:read"])]
    private $genre;

    #[ORM\Column(type: 'string', length: 4)]
    #[Groups(["film:read", "user:read"])]
    private $annee;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(["film:read", "user:read"])]
    private $image;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'films')]
    #[Groups(["film:read"])]
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getAnnee(): ?string
    {
        return $this->annee;
    }

    public function setAnnee(string $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addFilm($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeFilm($this);
        }

        return $this;
    }
}
