<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UnitOfMeasureRepository")
 * @ORM\Table(name="unit_of_measure")
 */
class UnitOfMeasure implements Translatable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=255, name="name")
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
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=255, name="abbreviation")
     */
    private $abbreviation;
    
    /**
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=255, name="plural", nullable=true)
     */
    private $plural;
    
    /**
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=255, name="plural_abbreviation", nullable=true)
     */
    private $pluralAbbreviation;
    
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * @return mixed
     */
    public function getPlural()
    {
        return $this->plural;
    }

    /**
     * @return mixed
     */
    public function getPluralAbbreviation()
    {
        return $this->pluralAbbreviation;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $abbreviation
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
    }

    /**
     * @param mixed $plural
     */
    public function setPlural($plural)
    {
        $this->plural = $plural;
    }

    /**
     * @param mixed $plural_abbreviation
     */
    public function setPluralAbbreviation($plural_abbreviation)
    {
        $this->plural_abbreviation = $plural_abbreviation;
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

    public function setTranslatableLocale($locale) {
        $this->locale = $locale;
    }
    
    public function __toString() {
        return $this->name;
    }
    
}
