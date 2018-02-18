<?php
namespace App\Controller;

use App\Entity\Ingredient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\UnitOfMeasure;
use App\Entity\RecipeType;
use App\Form\RecipeTypeType;
use App\Entity\Recipe;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Preparation;


/**
 * @Route("/admin")
 * @author gareth
 *
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name="admin_home")
     */
    public function index() {
        
        return $this->render("/admin/index.html.twig",
        []
            );
    }
    
    /**
     * @Route("/blog", name="admin_blog")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blogAdmin(Request $request) {
        
        return $this->render("/admin/blog.html.twig", [
            
        ]);
    }
    
    /**
     * @Route("/{object}", requirements={"object"="ingredient|uom|recipetype|recipe|preparation"}, name="admin_object")
     */
    public function doAdminPage($object, Request $request) {
        $object_info = $this->getObjectInfo($object);
        $class = $object_info['class'];
        $fields = $object_info['fields'];
        $template = $object_info['template'];
        $mode = "create";
        
        $table = $this->doAdminTable($class, $fields);
        
        $entity = new $class;
        $formClass = $this->getFormClass($class);
        $form = $this->createForm($formClass, $entity);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if($entity instanceof Recipe) {
                $entity->setAuthor("Me");
                $entity->setCreationDate(new \DateTime());
            }
            
            $em->persist($entity);
            
            $em->flush();
            return $this->redirectToRoute("admin_object", ["object"=>$object]);
        }
        
        return $this->render($template, [
            "table"=>$table,
            "fields"=>$fields,
            "form"=>$form->createView(),
            "mode"=>$mode
        ]);
    }
        
    /**
     * 
     * @param string $object
     * @param string $slug
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/{object}/{slug}", name="admin_edit", requirements={"object"="ingredient|recipe|preparation|uom|recipetype"})
     */
    public function editObject($object, $slug, Request $request) {
        $object_info = $this->getObjectInfo($object);
        $class = $object_info['class'];
        $fields = $object_info['fields'];
        $template = $object_info['template'];
        $mode = "update";
        
        $table = $this->doAdminTable($class, $fields);
        
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository($class);
        
        if(!$entity = $rep->findOneBy(["slug"=>$slug])) {
            return $this->createNotFoundException('Unable to find $object with identifier $slug'); 
        }
        
        $formClass = $this->getFormClass($class);
        $form = $this->createForm($formClass, $entity);
        
        $form->handleRequest($request); 
        
        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($entity);
            $em->flush();
            
            return $this->redirectToRoute("admin_object", ["object"=>$object]);
        }
        
        return $this->render($template, [
            "table"=>$table,
            "fields"=>$fields,
            "form"=>$form->createView(),
            "mode"=>$mode
        ]);       
    }
    
    
    private function doAdminTable($class, $fields) {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository($class);
        $object = strtolower(substr($class, strrpos($class, "\\")+1));
        if($object == "unitofmeasure") { $object = "uom";}
        
        $object_list = $rep->findBy([], ["name"=>"ASC"]);
        
        return $this->renderView("/admin/admin_table.html.twig",[
            "fields"=>$fields,
            "object_list"=>$object_list,
            "object"=>$object,            
        ]);
    }
    
    private function getObjectInfo($object) {
        switch($object) {
            case "ingredient":
                $class = Ingredient::class;
                $fields = ["name"];
                $template = "/admin/ingredient.html.twig";
                break;
            case "uom":
                $class = UnitOfMeasure::class;
                $fields = ["name", "plural", "abbreviation", "pluralAbbreviation"];
                $template = "/admin/uom.html.twig";
                break;
            case "recipetype":
                $class = RecipeType::class;
                $fields = ["name"];
                $template = "/admin/recipe_type.html.twig";
                break;
            case "recipe":
                $class = Recipe::class;
                $fields = ["name"];
                $template = "/admin/recipe.html.twig";
                break;
            case "preparation":
                $class = Preparation::class;
                $fields = ["name"];
                $template = "/admin/preparation.html.twig";
                break;
            default:
                return $this->createNotFoundException("$object is not a valid route");
        }       
        return ['class'=>$class, 'fields'=>$fields, 'template'=>$template];
    }
    
    private function getFormClass($class) {
        $formClass = str_replace("Entity", "Form", $class)."Type";
        return $formClass;
    
    }
    
}

