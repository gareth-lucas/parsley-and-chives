<?php

namespace App\Form;

use App\Entity\RecipeStep;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RecipeStepType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('position', ChoiceType::class, [
                'label'=>'admin.recipestep.position',
                "choices"=>[
                    'admin.recipestep.step.1'=>1,
                    'admin.recipestep.step.2'=>2,
                    'admin.recipestep.step.3'=>3,
                    'admin.recipestep.step.4'=>4,
                    'admin.recipestep.step.5'=>5,
                    'admin.recipestep.step.6'=>6,
                    'admin.recipestep.step.7'=>7,
                    'admin.recipestep.step.8'=>8,
                    'admin.recipestep.step.9'=>9,
                    'admin.recipestep.step.10'=>10],
                "multiple"=>false
            ])
            ->add('description', TextareaType::class, [
                'label'=>'admin.recipestep.description'
            ])
            ->add('image', FileType::class, [
                'required'=>false,
                'label'=>'admin.recipestep.image'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            
            'data_class' => RecipeStep::class,
        ]);
    }
}
