<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping as ORM;
use App\Iface\Commentable as iCommentable;
use Doctrine\Common\Collections\ArrayCollection;

/** @MappedSuperclass */
class Commentable implements iCommentable {
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    
    private $comments;   
    
    public function __construct() {
        $this->comments = new ArrayCollection();
    }
    
    public function addComment(Comment $comment) {
        $this->comments->add($comment);
        $comment->setParent($this);
    }
    
    public function getComments() {
        return $this->comments;
    }
    
    public function removeComment(Comment $comment) {
        $this->comments->remove($comment);
    }
    
    public function setComments(ArrayCollection $comments) {
        $this->comments = $comments;
    }
    
    public function getId() {
        return $this->id;
    }
}