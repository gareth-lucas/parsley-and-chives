<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IngredientRepository")
 */
class Ingredient implements Translatable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, name="name")
     * @Gedmo\Translatable
     * @Groups({"searchable"})
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=255, name="slug", unique=true)
     * @Gedmo\Slug(fields={"name"})
     * @Gedmo\Translatable
     * @var string
     */
    private $slug;
    
    /**
     * @Gedmo\Locale
     * @var unknown
     */
    private $locale;
    
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
    
    public function __toString() {
        return $this->name;
    }
    
    public function setRecipeIngredient(RecipeIngredient $ri) {
        $this->recipeIngredient = $ri;
        return $this;
    }
    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * 
     */
    public function setTranslatableLocale($locale) {
        $this->locale = $locale;
    }
    
}
