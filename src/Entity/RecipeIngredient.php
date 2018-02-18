<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeIngredientRepository")
 */
class RecipeIngredient implements Translatable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, name="quantity", nullable=true)
     */
    private $quantity;
    
    /**
     * @ORM\ManyToOne(targetEntity="Recipe", inversedBy="recipeIngredients")
     */
    private $recipe;
    
    /**
     * @ORM\ManyToOne(targetEntity="Ingredient")
     */
    private $ingredient;
    
    /**
     * @ORM\ManyToOne(targetEntity="UnitOfMeasure")
     */
    private $uom;
    
    /**
     * @ORM\ManyToOne(targetEntity="Preparation")
     * @var unknown
     */
    private $preparation;
    
    /**
     * @ORM\Column(type="string", length=255, name="readable_string", nullable=true)
     * @Gedmo\Translatable
     * @var string
     */
    private $readableString;
    
    /**
     * @Gedmo\Locale
     */
    private $locale;    
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * @return mixed
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @return mixed
     */
    public function getUom()
    {
        return $this->uom;
    }

    /**
     * @return \App\Entity\unknown
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @param mixed $recipe
     */
    public function setRecipe($recipe)
    {
        $this->recipe = $recipe;
    }

    /**
     * @param mixed $ingredient
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;
    }

    /**
     * @param mixed $uom
     */
    public function setUom($uom)
    {
        $this->uom = $uom;
    }

    /**
     * @param \App\Entity\Preparation $preparation
     */
    public function setPreparation($preparation)
    {
        $this->preparation = $preparation;
    }

    public function getReadableString() {
        if($this->readableString == "") {
            $string = trim($this->quantity
            ." "
                .($this->uom ? strtolower($this->uom->getAbbreviation()) : '')
            ." "
                .($this->preparation ? strtolower($this->preparation->getName()) : '')
            ." "
                .$this->ingredient->getName());
            
            return implode(" ", array_filter(explode(" ", $string)));
        }
        
        return $this->readableString;
    }
    
    public function setReadableString($rs) {
        $this->readableString = $rs;
    }
    
    /**
     *
     */
    public function setTranslatableLocale($locale) {
        $this->locale = $locale;
    }
    
}
