<?php

namespace App\Form;

use App\Calculator\Calculator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalculatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'First_Number',
                NumberType::class,
                ['attr' => ['maxlength' => Calculator::MAXLENGTH]]
            )
            ->add(
                'Operator',
                ChoiceType::class, [
                    'choices' => Calculator::OPERANDS
                ]
            )
            ->add(
                'Second_Number',
                NumberType::class,
                ['attr' => ['maxlength' => Calculator::MAXLENGTH]]
            )
            ->add(
                'calculate',
                SubmitType::class
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'First_Number' => true,
            'Second_Number' => true,
        ]);
    }
}
