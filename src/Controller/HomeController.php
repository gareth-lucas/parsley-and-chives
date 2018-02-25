<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Recipe;
use App\Entity\RecipeType;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CommentType;
use App\Entity\Comment;


class HomeController extends Controller
{
    /**
    * @Route("/{_locale}/", name="home")
    */    
    public function index() {
        
        $em = $this->getDoctrine()->getManager();
        
        $main_recipe = $em->getRepository(Recipe::class)->find(1);
       
        return $this->render("home/index.html.twig", [
            "main_recipe"=>$main_recipe
        ]);       
    }
    
    /**
     * @Route("/{_locale}/recipe/{slug}", name="view_recipe")
     * @param string $slug
     */
    public function viewRecipe(Request $request, $slug) {
        
        $em = $this->getDoctrine()->getManager();
        $recipe = $em->getRepository(Recipe::class)->findOneBySlug($slug);        
        
        if(!$recipe) {
            return $this->createNotFoundException("That recipe couldn't be found!");
        }
        
        $comments = $recipe->getComments();
        
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);       
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $comment->setAuthor($this->getUser());
            $comment->setCreationDate(new \DateTime());
            $comment->setParent($recipe);
            
            $em->persist($comment);
            $em->flush();
            
            return $this->redirectToRoute("view_recipe", ['slug'=>$slug]);
        }
        
        $settings = $this->container->getParameter("settings");
        
        return $this->render("home/recipe.html.twig", [
            "recipe"=>$recipe,
            "form"=>$form->createView(),
            "comments"=>$comments,
            "settings"=>$settings
        ]);
        
    }
    
    /**
     * @Route("/{_locale}/recipes/featured", name="featured_recipes")
     */
    public function getFeaturedRecipes() {
        $em = $this->getDoctrine()->getManager();
        $featured_recipes = $em->getRepository(Recipe::class)->findBy(["id"=>['7','9','6','26']],[],4);
        
        return $this->render("home/featured_recipes.html.twig", [
            "featured_recipes"=>$featured_recipes
        ]); 
    }
    
    
    /**
     * @Route("/{_locale}/recipes/{slug}", name="recipes")
     * @param string $slug
     */
    public function getRecipesByType($slug) {
        $em = $this->getDoctrine()->getManager();
        $rtype = $em->getRepository(RecipeType::class)->findOneBySlug($slug);
        
        if(!$rtype) {
            return $this->createNotFoundException("Recipe Type $slug could not be found");
        }
        
        $recipeList = $rtype->getRecipes();
        
        return $this->render("/home/recipes.html.twig", [
            "recipeList"=>$recipeList,
            "rtype"=>$rtype
        ]);
    }
    
    /**
     * @Route("/{_locale}/search", name="search", requirements={"_method"="POST"})
     */
    public function doSearch(Request $request) {
        
        return $this->render("/home/search.html.twig", [
            
        ]);
    }
    
}
