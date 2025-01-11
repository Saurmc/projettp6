<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatureRepository::class)]
class Candidature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'candidatures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Dev $dev = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?FicheDePoste $ficheDePoste = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $datePostulation = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = 'en_attente';

    public function __construct()
    {
        $this->datePostulation = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDev(): ?Dev
    {
        return $this->dev;
    }

    public function setDev(?Dev $dev): static
    {
        $this->dev = $dev;

        return $this;
    }

    public function getFicheDePoste(): ?FicheDePoste
    {
        return $this->ficheDePoste;
    }

    public function setFicheDePoste(?FicheDePoste $ficheDePoste): static
    {
        $this->ficheDePoste = $ficheDePoste;

        return $this;
    }

    public function getDatePostulation(): ?\DateTimeImmutable
    {
        return $this->datePostulation;
    }

    public function setDatePostulation(\DateTimeImmutable $datePostulation): static
    {
        $this->datePostulation = $datePostulation;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
