<?php

namespace App\Entity;

use App\Repository\CompetenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompetenceRepository::class)]
class Competence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\ManyToMany(targetEntity: FicheDePoste::class, mappedBy: 'competences')]
    private Collection $fichesDePoste;

    #[ORM\ManyToMany(targetEntity: Dev::class, mappedBy: 'competences')]
    private Collection $devs;

    public function __construct()
    {
        $this->fichesDePoste = new ArrayCollection();
        $this->devs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getFichesDePoste(): Collection
    {
        return $this->fichesDePoste;
    }

    public function addFicheDePoste(FicheDePoste $ficheDePoste): static
    {
        if (!$this->fichesDePoste->contains($ficheDePoste)) {
            $this->fichesDePoste->add($ficheDePoste);
            $ficheDePoste->addCompetence($this);
        }

        return $this;
    }

    public function removeFicheDePoste(FicheDePoste $ficheDePoste): static
    {
        if ($this->fichesDePoste->removeElement($ficheDePoste)) {
            $ficheDePoste->removeCompetence($this);
        }

        return $this;
    }

    public function getDevs(): Collection
    {
        return $this->devs;
    }

    public function addDev(Dev $dev): static
    {
        if (!$this->devs->contains($dev)) {
            $this->devs->add($dev);
            $dev->addCompetence($this);
        }

        return $this;
    }

    public function removeDev(Dev $dev): static
    {
        if ($this->devs->removeElement($dev)) {
            $dev->removeCompetence($this);
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->nom;
    }
}
