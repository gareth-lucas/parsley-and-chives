<?php

namespace App\Form;

use App\Entity\UnitOfMeasure;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UnitOfMeasureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label'=>'admin.uom.name'
            ])
            ->add('plural', TextType::class, [
                'required'=>false,
                'label'=>'admin.uom.plural'
            ])
            ->add('abbreviation', TextType::class, [
                'label'=>'admin.uom.abbreviation'
            ])
            ->add('pluralAbbreviation', TextType::class, [
                'required'=>false,
                'label'=>'admin.uom.plural_abbreviation'
            ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            //'data_class' => UnitOfMeasure::class,
        ]);
    }
}
