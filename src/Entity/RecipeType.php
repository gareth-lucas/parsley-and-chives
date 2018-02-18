<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeTypeRepository")
 * @ORM\Table(name="recipe_types")
 */
class RecipeType implements Translatable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Gedmo\Translatable
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;
    
    /**
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     * @Gedmo\Slug(fields={"name"})
     * @Gedmo\Translatable
     * @var unknown
     */
    private $slug;
    
    /**
     * @Gedmo\Locale
     * @var unknown
     */
    private $locale;
    
    /**
     * @ORM\ManyToMany(targetEntity="Recipe", mappedBy="recipeTypes")
     * @var unknown
     */
    private $recipes;
    
    public function __construct() {
        $this->recipes = new ArrayCollection();
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function setTranslatableLocale($locale) {
        $this->locale = $locale;
    }

    /**
     * @return \App\Entity\unknown
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param \App\Entity\unknown $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function __toString() {
        return $this->name;
    }
    
    public function addRecipe(Recipe $recipe) {
        $this->recipes->add($recipe);
    }
    
    public function getRecipes() {
        return $this->recipes->toArray();
    }
}
