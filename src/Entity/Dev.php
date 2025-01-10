<?php

namespace App\Entity;

use App\Repository\DevRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DevRepository::class)]
class Dev extends User
{
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Ce champ est requis')]
    #[Assert\Length(min: 2, max: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Ce champ est requis')]
    #[Assert\Length(min: 2, max: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Ce champ est requis')]
    private ?string $localisation = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Ce champ est requis')]
    #[Assert\Range(min: 1, max: 3)]
    private ?int $niveauExperience = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Ce champ est requis')]
    #[Assert\Range(min: 15000, max: 300000)]
    private ?float $salaireMinimum = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: 'Ce champ est requis')]
    #[Assert\Length(min: 10, max: 1000, minMessage: 'Minimum {{ limit }} caractères')]
    private ?string $biographie = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Url(message: 'L\'URL n\'est pas valide')]
    #[Assert\Length(max: 255)]
    private ?string $avatar = null;

    #[ORM\ManyToMany(targetEntity: Competence::class, inversedBy: 'devs')]
    #[ORM\JoinTable(name: 'dev_competence')]
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
            $competence->addDev($this);
        }

        return $this;
    }

    public function removeCompetence(Competence $competence): static
    {
        if ($this->competences->removeElement($competence)) {
            $competence->removeDev($this);
        }

        return $this;
    }
}
