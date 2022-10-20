<?php

namespace App\Form;

use App\Entity\Jobs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('jobDescription')
            ->add('jobNom')
            ->add('jobEntreprise')
            ->add('jobLieu')
            ->add('jobShort')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Jobs::class,
        ]);
    }
}
