<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\RecipeStep;
use App\Entity\RecipeIngredient;
use App\Entity\RecipeImage;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Entity\Commentable;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeRepository")
 * @ORM\Table(name="recipes")
 */
class Recipe extends Commentable implements Translatable
{
    
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="parent")
     */
    protected $comments;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Gedmo\Translatable
     * @Groups({"searchable"})
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=100, unique=true, name="slug")
     * @Gedmo\Translatable
     * @Gedmo\Slug(fields={"name"})
     * @Groups({"searchable"})
     */
    private $slug;
    
    /**
     * @ORM\ManyToMany(targetEntity="RecipeType", inversedBy="recipes", cascade={"persist"})
     */
    private $recipeTypes;
    
    /**
     * @ORM\Column(type="text")
     * @Gedmo\Translatable
     * @Groups({"searchable"})
     */
    private $description;
    
    /**
     * @ORM\Column(type="boolean", name="is_vegetarian", nullable=true)     
     */
    private $isVegetarian;
    
    /**
     * @ORM\Column(type="boolean", name="is_vegan", nullable=true)
     */
    private $isVegan;
    
    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     * @Gedmo\Translatable
     */
    private $country;
    
    /**
     * @ORM\Column(type="time", nullable=true, name="preparation_time")
     */
    private $preparationTime;
    
    /**
     * @ORM\Column(type="string", nullable=true, name="preparation_time_string")
     */
    private $preparationTimeString;
    
    /**
     * @ORM\Column(type="time", length=100, nullable=true, name="cooking_time")
     */
    private $cookingTime;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true, name="cooking_time_string")
     */
    private $cookingTimeString;
    
    /**
     * @ORM\Column(type="datetime", name="creation_date")
     */
    private $creationDate;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $author;
    
    /**
     * @ORM\OneToMany(targetEntity="RecipeStep", mappedBy="recipe", cascade={"persist"})
     */
    private $recipeSteps;
    
    /**
     * @ORM\OneToMany(targetEntity="RecipeImage", mappedBy="recipe", cascade={"persist"})
     */
    private $recipeImages;
    
    /**
     * @ORM\OneToMany(targetEntity="RecipeIngredient", mappedBy="recipe", cascade={"persist"})
     */
    private $recipeIngredients;
    
    /**
     * @Gedmo\Locale
     */
    private $locale;
    
    
    public function __construct() {
        parent::__construct();
        $this->recipeSteps = new ArrayCollection();
        $this->recipeImages = new ArrayCollection();
        $this->recipeIngredients = new ArrayCollection();
        $this->recipeTypes = new ArrayCollection();
    }
    
    public function getComments() {
        return $this->comments->toArray();
    }
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getIsVegetarian()
    {
        return $this->isVegetarian;
    }

    /**
     * @param mixed $isVegetarian
     */
    public function setIsVegetarian($isVegetarian)
    {
        $this->isVegetarian = $isVegetarian;
    }

    /**
     * @return mixed
     */
    public function getIsVegan()
    {
        return $this->isVegan;
    }

    /**
     * @param mixed $isVegan
     */
    public function setIsVegan($isVegan)
    {
        $this->isVegan = $isVegan;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getPreparationTime()
    {
        return $this->preparationTime;
    }

    /**
     * @param mixed $preparationTime
     */
    public function setPreparationTime($preparationTime)
    {
        $this->preparationTime = $preparationTime;
    }

    /**
     * @return mixed
     */
    public function getPreparationTimeString()
    {
        
        if($this->preparationTimeString == "" && $this->getPreparationTime()) {
            $time = (60 * $this->getPreparationTime()->format("G")) + (int)$this->getPreparationTime()->format("i");
            return $time." minutes";
        }
        
        return $this->preparationTimeString;
    }

    /**
     * @param mixed $preparationTimeString
     */
    public function setPreparationTimeString($preparationTimeString)
    {
        $this->preparationTimeString = $preparationTimeString;
    }

    /**
     * @return mixed
     */
    public function getCookingTime()
    {
        
        return $this->cookingTime;
    }

    /**
     * @param mixed $cookingTime
     */
    public function setCookingTime($cookingTime)
    {
        $this->cookingTime = $cookingTime;
    }

    /**
     * @return mixed
     */
    public function getCookingTimeString()
    {
        if($this->cookingTimeString == "" && $this->getCookingTime()) {
            $time = (60 * $this->getCookingTime()->format("G")) + (int)$this->getCookingTime()->format("i");
            return $time." minutes";
        }
        
        return $this->cookingTimeString;
    }

    /**
     * @param mixed $cookingTimeString
     */
    public function setCookingTimeString($cookingTimeString)
    {
        $this->cookingTimeString = $cookingTimeString;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return array
     */
    public function getRecipeSteps()
    {
        return $this->recipeSteps->toArray();
    }
    
    /**
     * 
     * @param RecipeStep $rs
     * @return \App\Entity\Recipe
     */
    public function addRecipeStep(RecipeStep $rs) {
        $this->recipeSteps->add($rs);
        $rs->setRecipe($this);
        return $this;
    }
    
    /**
     * 
     * @param unknown $rs
     * @return \App\Entity\Recipe
     */
    public function setRecipeSteps($rs) {
        $this->recipeSteps = $rs;
        foreach($rs as $r) {
            $r->setRecipe($this);
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getRecipeImages()
    {
        return $this->recipeImages->toArray();
    }
    
    /**
     * @return Recipe
     * @param RecipeImage $ri
     */
    public function addRecipeImage(RecipeImage $ri) {
        $this->recipeImages->add($ri);
        $ri->setRecipe($this);
        return $this;
    }
    
    /**
     * 
     * @param unknown $ri
     * @return \App\Entity\Recipe
     */
    public function setRecipeImages($ri) {
        $this->recipeImages = $ri;
        foreach($ri as $i) {
            $i->setRecipe($this);
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getRecipeIngredients()
    {
        return $this->recipeIngredients->toArray();
    }
    
    /**
     * 
     * @param array  $ri
     * @return \App\Entity\Recipe
     */
    public function setRecipeIngredients($ri) {
        $this->recipeIngredients = $ri;
        foreach($ri as $i) {
            $i->setRecipe($this);
        }
        return $this;
    }
    
    /**
     * @return Recipe
     * @param RecipeIngredient $ri
     */
    public function addRecipeIngredient(RecipeIngredient $ri) {
        $this->recipeIngredients->add($ri);
        $ri->setRecipe($this);
        return $this;
    }

    /**
     * @param mixed $locale
     */
    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }
    /**
     * @return mixed
     */
    public function getRecipeTypes()
    {
        return $this->recipeTypes;
    }
    
    public function addRecipeType(RecipeType $rt) {
        $this->recipeTypes->add($rt);
    }

  
}
