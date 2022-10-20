<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\JobapplicationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JobapplicationRepository::class)]
#[ApiResource]
class Jobapplication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idCompagnies = null;

    #[ORM\Column]
    private ?int $idPeoples = null;

    #[ORM\Column]
    private ?int $idAdvertisements = null;

    #[ORM\Column]
    private ?bool $mail = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCompagnies(): ?int
    {
        return $this->idCompagnies;
    }

    public function setIdCompagnies(int $idCompagnies): self
    {
        $this->idCompagnies = $idCompagnies;

        return $this;
    }

    public function getIdPeoples(): ?int
    {
        return $this->idPeoples;
    }

    public function setIdPeoples(int $idPeoples): self
    {
        $this->idPeoples = $idPeoples;

        return $this;
    }

    public function getIdAdvertisements(): ?int
    {
        return $this->idAdvertisements;
    }

    public function setIdAdvertisements(int $idAdvertisements): self
    {
        $this->idAdvertisements = $idAdvertisements;

        return $this;
    }

    public function isMail(): ?bool
    {
        return $this->mail;
    }

    public function setMail(bool $mail): self
    {
        $this->mail = $mail;

        return $this;
    }
}
