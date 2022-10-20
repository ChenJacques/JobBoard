<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\JobsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JobsRepository::class)]
#[ApiResource]
class Jobs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $jobDescription = null;

    #[ORM\Column(length: 255)]
    private ?string $jobNom = null;

    #[ORM\Column(length: 255)]
    private ?string $jobEntreprise = null;

    #[ORM\Column(length: 255)]
    private ?string $jobLieu = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $jobShort = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobDescription(): ?string
    {
        return $this->jobDescription;
    }

    public function setJobDescription(string $jobDescription): self
    {
        $this->jobDescription = $jobDescription;

        return $this;
    }

    public function getJobNom(): ?string
    {
        return $this->jobNom;
    }

    public function setJobNom(string $jobNom): self
    {
        $this->jobNom = $jobNom;

        return $this;
    }

    public function getJobEntreprise(): ?string
    {
        return $this->jobEntreprise;
    }

    public function setJobEntreprise(string $jobEntreprise): self
    {
        $this->jobEntreprise = $jobEntreprise;

        return $this;
    }

    public function getJobLieu(): ?string
    {
        return $this->jobLieu;
    }

    public function setJobLieu(string $jobLieu): self
    {
        $this->jobLieu = $jobLieu;

        return $this;
    }

    public function getJobShort(): ?string
    {
        return $this->jobShort;
    }

    public function setJobShort(string $jobShort): self
    {
        $this->jobShort = $jobShort;

        return $this;
    }
}
