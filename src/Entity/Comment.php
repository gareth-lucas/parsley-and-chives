<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Commentable;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="comments")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="parent_type", type="string")
 * @ORM\DiscriminatorMap({"comment"="Comment", "recipe"="Recipe"})
 */
class Comment extends Commentable
{

    
    /**
     * @ORM\Column(type="text", name="text")
     * @var string
     */
    private $text;
    
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="parent")
     */
    protected $comments;
    
    /**
     * @ORM\ManyToOne(targetEntity="Commentable", inversedBy="comments")
     * @var Commentable
     */
    private $parent;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
     * @var \App\Entity\User
     */
    private $author;
    
    /**
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     * @var \DateTime
     */
    private $creationDate;

    public function __construct() {
        $this->comments = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $comment
     */
    public function setText($text)
    {
        $this->text = $text;
    }
    /**
     * @return \App\Entity\User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param \App\Entity\User $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @param \DateTime $creation_date
     */
    public function setCreationDate($creation_date)
    {
        $this->creationDate = $creation_date;
    }

    public function setParent(Commentable $commentable) {
        $this->parent = $commentable;
    }
    
    public function getParent() {
        return $this->parent;
    }

}
