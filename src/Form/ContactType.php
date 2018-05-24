<?php
/**
 * Created by PhpStorm.
 * User: Wolfd
 * Date: 24/05/2018
 * Time: 11:37
 */

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
            ->add('Contact')
            ->add('Surname')
            ->add('email', EmailType::class)
            ->add('comment')
            ->add('submit', SubmitType::class, [
                "label" => "Go!"
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
{

}