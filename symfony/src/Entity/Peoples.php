<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PeoplesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PeoplesRepository::class)]
#[ApiResource]
class Peoples
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $peopleName = null;

    #[ORM\Column(length: 255)]
    private ?string $peoplePrenom = null;

    #[ORM\Column(length: 255)]
    private ?string $peopleEmail = null;

    #[ORM\Column(length: 255)]
    private ?string $peoplePassword = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPeopleName(): ?string
    {
        return $this->peopleName;
    }

    public function setPeopleName(string $peopleName): self
    {
        $this->peopleName = $peopleName;

        return $this;
    }

    public function getPeoplePrenom(): ?string
    {
        return $this->peoplePrenom;
    }

    public function setPeoplePrenom(string $peoplePrenom): self
    {
        $this->peoplePrenom = $peoplePrenom;

        return $this;
    }

    public function getPeopleEmail(): ?string
    {
        return $this->peopleEmail;
    }

    public function setPeopleEmail(string $peopleEmail): self
    {
        $this->peopleEmail = $peopleEmail;

        return $this;
    }

    public function getPeoplePassword(): ?string
    {
        return $this->peoplePassword;
    }

    public function setPeoplePassword(string $peoplePassword): self
    {
        $this->peoplePassword = $peoplePassword;

        return $this;
    }
}
