<?php

namespace App\DataFixtures;

use App\Entity\Jobs;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $product = new Jobs();
            $product->setJobDescription('Description'.$i);
            $product->setJobNom('Intitulé du Poste'.$i);
            $product->setJobEntreprise('Nom de Entreprise'.$i);
            $product->setJobLieu('Lieu'.$i);
            $product->setJobShort('Petite Description'.$i);
            $manager->persist($product);
        }    

        // Users
        // $faker = Faker\Factory::create('fr_FR');
        // for ($i = 0; $i < 10; $i++) {
        //     $user = new User ();
        //     $user->setFullName($faker->name());
        //     $user->setPseudo($faker->firstname()); 
        //     $user->setEmail($faker->email());
        //     $user->setPassword('password');
        //     $user->setRoles(['ROLE_USER']);
        //     $manager->persist($user);    
        // }

        $manager->flush();
    }
}
