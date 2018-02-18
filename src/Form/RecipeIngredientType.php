<?php

namespace App\Form;

use App\Entity\RecipeIngredient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\UnitOfMeasure;
use App\Entity\Preparation;
use App\Entity\Ingredient;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RecipeIngredientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantity', TextType::class, [
                'label'=>'admin.recipeingredient.quantity'
            ])
            ->add('uom', EntityType::class, [
                'required'=>false,
                'label'=>'admin.recipeingredient.unit',
                'class'=>UnitOfMeasure::class
            ])
            ->add('preparation', EntityType::class, [
                'required'=>false,
                'label'=>'admin.recipeingredient.preparation',
                'class'=>Preparation::class
            ])
            ->add('ingredient', EntityType::class, [
                'label'=>'admin.recipeingredient.ingredient',
                'class'=>Ingredient::class
            ])
            ->add('readableString', TextType::class, [
                "required"=>false,
                "label"=>"admin.recipeingredient.readableString"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RecipeIngredient::class,
        ]);
    }
}
