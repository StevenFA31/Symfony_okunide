<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Disque::class, mappedBy: 'Genre')]
    private Collection $disques_id;

    public function __construct()
    {
        $this->disques_id = new ArrayCollection();
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
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @return Collection<int, Disque>
     */
    public function getDisquesId(): Collection
    {
        return $this->disques_id;
    }

    public function addDisquesId(Disque $disquesId): self
    {
        if (!$this->disques_id->contains($disquesId)) {
            $this->disques_id->add($disquesId);
            $disquesId->addGenre($this);
        }

        return $this;
    }

    public function removeDisquesId(Disque $disquesId): self
    {
        if ($this->disques_id->removeElement($disquesId)) {
            $disquesId->removeGenre($this);
        }

        return $this;
    }
}