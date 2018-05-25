<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom', null,  ["label" => "Nom"])
            ->add('Prenom', null, ["label" => "Prénom"])
            ->add('Email', EmailType::class, ["label" => "Email"])
            ->add('Comment', null, ["label" => "Message"])
            ->add('submit', SubmitType::class, ["label" => "Go!"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => contact::class,
        ]);
    }
}
