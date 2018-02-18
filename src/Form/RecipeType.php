<?php

namespace App\Form;

use App\Entity\Recipe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\RecipeType as RTEntity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label'=>'admin.recipe.name'
            ])
            ->add('description', TextareaType::class, [
                'label'=>'admin.recipe.description'
            ])
            ->add("recipeTypes", EntityType::class, [
                "multiple"=>true,
                "expanded"=>true,
                "class"=>RTEntity::class,
                "required"=>false
            ])
            ->add('country', CountryType::class, [
                'label'=>'admin.recipe.country',
                'preferred_choices'=>['IT','IN','GB','CN','RU'],
                'required'=>false
            ])
            ->add('isVegetarian', CheckboxType::class, [
                'label'=>'admin.recipe.is_vegetarian',
                'required'=>false
            ])
            ->add('isVegan', CheckboxType::class, [
                'label'=>'admin.recipe.is_vegan',
                'required'=>false
            ])
            ->add('preparationTime', TimeType::class, [
                'label'=>'admin.recipe.prep_time.label',
                'input'=>'datetime',
                'widget'=>'choice',                
                'hours'=>[0,1,2,3,4,5,6,7,8,9,10,11,12],
                'minutes'=>[0,10,15,20,30,45]             
            ])
            ->add('preparationTimeString', TextType::class, [
                'label'=>'admin.recipe.prep_time_string',
                'required'=>false
            ])
            ->add('cookingTime', TimeType::class, [
                'label'=>'admin.recipe.cook_time.label',
                'input'=>'datetime',
                'widget'=>'choice',
                'hours'=>[0,1,2,3,4,5,6,7,8,9,10,11,12],
                'minutes'=>[0,10,15,20,30,45]       
            ])
            ->add('cookingTimeString', TextType::class, [
                'label'=>'admin.recipe.cook_time_string',
                'required'=>false
            ])
            ->add('recipeIngredients', CollectionType::class, [
                'label'=>'admin.recipe.recipe_ingredients',
                'entry_type'=>RecipeIngredientType::class,
                'allow_add'=>true,
                'allow_delete'=>true
            ])
            ->add('recipeSteps', CollectionType::class, [
                'label'=>'admin.recipe.recipe_steps',
                'entry_type'=>RecipeStepType::class,
                'allow_add'=>true,
                'allow_delete'=>true
            ])
            ->add('recipeImages', CollectionType::class, [
                'label'=>'admin.recipe.recipe_images',
                'entry_type'=>RecipeImageType::class,
                'allow_add'=>true,
                'allow_delete'=>true
            ])
            ->add('submit', SubmitType::class, [
                'label'=>'admin.submit'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([            
            'data_class' => Recipe::class,
        ]);
    }
}
