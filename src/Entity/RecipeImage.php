<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeImageRepository")
 * @Vich\Uploadable
 */
class RecipeImage implements Translatable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

   /**
    * @Gedmo\Translatable
    * @ORM\Column(type="string", length=255, name="label")
    */
    private $label;
    
    /**
     * @ORM\Column(type="string", length=255, name="image_name")
     */
    private $imageName;
    
    /**
     * @ORM\ManyToOne(targetEntity="Recipe", inversedBy="recipeImages")
     */
    private $recipe;
    
    /**
     * @Vich\UploadableField(mapping="recipe_image", fileNameProperty="imageName")
     * @var File
     */
    private $imageFile;
    
    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     * @var \DateTimeImmutable
     */
    private $updatedAt;
    
    /**
     * @Gedmo\Locale
     * @var unknown
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
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return mixed
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @return mixed
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @param mixed $filename
     */
    public function setImageName($filename)
    {
        $this->imageName = $filename;
    }

    /**
     * @param mixed $recipe
     */
    public function setRecipe($recipe)
    {
        $this->recipe = $recipe;
    }

    /**
     * @param \App\Entity\unknown $locale
     */
    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * 
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
    public function setImageFile(?File $image=null) : void 
    {
        $this->imageFile = $image;
        
        if(null !== $image) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }
    
    public function getImageFile() : ?File 
    {
        return $this->imageFile;
    }
    
}
