<?php

namespace App\State;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

abstract class UserDataPersister implements ProcessorInterface
{
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = []): void
    {
        // Handle the state
    }
}
