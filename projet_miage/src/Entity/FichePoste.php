<?php

namespace App\Entity;

use App\Enum\ExperienceEnum;
use App\Enum\LangagesEnum;
use App\Repository\FichePosteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FichePosteRepository::class)]
#[ORM\HasLifecycleCallbacks]
class FichePoste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre_poste = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\Column(type: 'string', enumType: LangagesEnum::class)]
    private ?LangagesEnum $technologie = null;

    #[ORM\Column(enumType: ExperienceEnum::class)]
    private ?ExperienceEnum $experience = null;

    #[ORM\Column]
    private ?float $salaire = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'fichesPoste')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Entreprise $entreprise = null;

    #[ORM\Column]
    private int $viewCount = 0;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTime $lastViewed = null;

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrePoste(): ?string
    {
        return $this->titre_poste;
    }

    public function setTitrePoste(string $titre_poste): static
    {
        $this->titre_poste = $titre_poste;
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

    public function getTechnologie(): ?LangagesEnum
    {
        return $this->technologie;
    }

    public function setTechnologie(LangagesEnum $technologie): static
    {
        $this->technologie = $technologie;
        return $this;
    }

    public function getExperience(): ?ExperienceEnum
    {
        return $this->experience;
    }

    public function setExperience(ExperienceEnum $experience): static
    {
        $this->experience = $experience;
        return $this;
    }

    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    public function setSalaire(float $salaire): static
    {
        $this->salaire = $salaire;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getEntreprise(): ?Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(?Entreprise $entreprise): static
    {
        $this->entreprise = $entreprise;
        return $this;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function incrementViewCount(): static
    {
        $this->viewCount++;
        $this->lastViewed = new \DateTime();
        return $this;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getLastViewed(): ?\DateTime
    {
        return $this->lastViewed;
    }
}
