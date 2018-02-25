<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Recipe;
use App\Entity\RecipeType;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CommentType;
use App\Entity\Comment;

/**
 * @Route("/blog")
 * @author gareth
 *
 */
class BlogController extends Controller
{
    /**
    * @Route("/", name="blog_home")
    */    
    public function index() {       
       
        return $this->render("blog/index.html.twig", [

        ]);       
    }    
}
