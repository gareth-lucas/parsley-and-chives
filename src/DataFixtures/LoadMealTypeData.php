<?php
namespace App\DataFixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\RecipeType;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadMealTypeData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $names = [
            "Snack",
            "Breakfast",
            "Lunch",
            "Dinner",
            "Brunch",
            "Dessert",
            "Drink",
            "First Course",
            "Main Dish",
            "Starter"
        ];
        
        foreach ($names as $name) {
            $mealType = new RecipeType();
            $mealType->setTranslatableLocale("en");
            $mealType->setName($name);
            $manager->persist($mealType);
            $this->addReference("type-".strtolower(str_replace(" ", "-", $mealType->getName())), $mealType);
        }
        
        $manager->flush();
    }
    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
     */
    public function getOrder()
    {
        return 4;
        
    }

    
    
}