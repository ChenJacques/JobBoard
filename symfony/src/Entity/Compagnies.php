<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CompagniesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompagniesRepository::class)]
#[ApiResource]
class Compagnies
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $compagnyName = null;

    #[ORM\Column(length: 255)]
    private ?string $compagnyEmail = null;

    #[ORM\Column(length: 255)]
    private ?string $compagnyPassword = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompagnyName(): ?string
    {
        return $this->compagnyName;
    }

    public function setCompagnyName(string $compagnyName): self
    {
        $this->compagnyName = $compagnyName;

        return $this;
    }

    public function getCompagnyEmail(): ?string
    {
        return $this->compagnyEmail;
    }

    public function setCompagnyEmail(string $compagnyEmail): self
    {
        $this->compagnyEmail = $compagnyEmail;

        return $this;
    }

    public function getCompagnyPassword(): ?string
    {
        return $this->compagnyPassword;
    }

    public function setCompagnyPassword(string $compagnyPassword): self
    {
        $this->compagnyPassword = $compagnyPassword;

        return $this;
    }
}
