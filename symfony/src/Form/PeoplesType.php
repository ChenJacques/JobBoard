<?php

namespace App\Form;

use App\Entity\Peoples;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PeoplesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('peopleName')
            ->add('peoplePrenom')
            ->add('peopleEmail')
            ->add('peoplePassword')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Peoples::class,
        ]);
    }
}
