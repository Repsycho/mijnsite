<?php

namespace App\Form;

use App\Entity\Formulier;
use Doctrine\ORM\Query\AST\Functions\CurrentTimeFunction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['attr' => ['placeholder' => 'voer hier je naam in', 'class' => 'name_class'] ])
            ->add('email', TextType::class, ['attr' => ['placeholder' => 'voer hier je email in'] ])
            ->add('message', TextareaType::class, ['attr' => ['placeholder' => 'voer hier je bericht in',]])
            ->add('subumit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Formulier::class,
        ]);
    }
}
