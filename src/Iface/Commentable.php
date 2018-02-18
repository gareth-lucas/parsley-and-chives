<?php

namespace App\Iface;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\Comment;


interface Commentable
{
    public function addComment(Comment $comment);
    
    public function getComments();

}
