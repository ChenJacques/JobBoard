<?php

namespace App\Form;

use App\Entity\Jobapplication;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobapplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idCompagnies')
            ->add('idPeoples')
            ->add('idAdvertisements')
            ->add('mail')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Jobapplication::class,
        ]);
    }
}
