<?php

namespace App\Entity;

use App\Repository\DevRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DevRepository::class)]
class Dev extends User
{
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\Column(type: 'json')]
    private array $langages = [];

    #[ORM\Column]
    private ?int $niveauExperience = null;

    #[ORM\Column]
    private ?float $salaireMinimum = null;

    #[ORM\Column(type: 'text')]
    private ?string $biographie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatar = null;

    #[ORM\ManyToMany(targetEntity: Competence::class)]
    private Collection $competences;

    public function __construct()
    {
        $this->competences = new ArrayCollection();
        $this->setRole('ROLE_DEV');
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;
        return $this;
    }

    public function getLangages(): array
    {
        return $this->langages;
    }

    public function setLangages(array $langages): static
    {
        $this->langages = $langages;
        return $this;
    }

    public function getNiveauExperience(): ?int
    {
        return $this->niveauExperience;
    }

    public function setNiveauExperience(int $niveauExperience): static
    {
        $this->niveauExperience = $niveauExperience;
        return $this;
    }

    public function getSalaireMinimum(): ?float
    {
        return $this->salaireMinimum;
    }

    public function setSalaireMinimum(float $salaireMinimum): static
    {
        $this->salaireMinimum = $salaireMinimum;
        return $this;
    }

    public function getBiographie(): ?string
    {
        return $this->biographie;
    }

    public function setBiographie(string $biographie): static
    {
        $this->biographie = $biographie;
        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): static
    {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @return Collection<int, Competence>
     */
    public function getCompetences(): Collection
    {
        return $this->competences;
    }

    public function addCompetence(Competence $competence): static
    {
        if (!$this->competences->contains($competence)) {
            $this->competences->add($competence);
        }

        return $this;
    }

    public function removeCompetence(Competence $competence): static
    {
        $this->competences->removeElement($competence);
        return $this;
    }
}
