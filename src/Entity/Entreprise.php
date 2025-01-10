<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntrepriseRepository::class)]
class Entreprise extends User
{
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $siteWeb = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logo = null;

    #[ORM\OneToMany(mappedBy: 'entreprise', targetEntity: FicheDePoste::class, orphanRemoval: true)]
    private Collection $fichesDePoste;

    public function __construct()
    {
        $this->setRole('ROLE_ENTREPRISE');
        $this->fichesDePoste = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->siteWeb;
    }

    public function setSiteWeb(?string $siteWeb): static
    {
        $this->siteWeb = $siteWeb;
        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): static
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return Collection<int, FicheDePoste>
     */
    public function getFichesDePoste(): Collection
    {
        return $this->fichesDePoste;
    }

    public function addFicheDePoste(FicheDePoste $ficheDePoste): static
    {
        if (!$this->fichesDePoste->contains($ficheDePoste)) {
            $this->fichesDePoste->add($ficheDePoste);
            $ficheDePoste->setEntreprise($this);
        }

        return $this;
    }

    public function removeFicheDePoste(FicheDePoste $ficheDePoste): static
    {
        if ($this->fichesDePoste->removeElement($ficheDePoste)) {
            if ($ficheDePoste->getEntreprise() === $this) {
                $ficheDePoste->setEntreprise(null);
            }
        }

        return $this;
    }
}
