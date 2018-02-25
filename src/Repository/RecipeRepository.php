<?php

namespace App\Repository;

use App\Entity\Recipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\RecipeType;

class RecipeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Recipe::class);
    }    
    
//     public function findRecipesByType(RecipeType $type)
//     {
//         return $this->createQueryBuilder("r")
//             ->join(RecipeType::class, "rt")
//             ->where('r.recipeTypes = :value')
//             ->orderBy('r.name', 'ASC')
//             ->setMaxResults(10)
//             ->getQuery()
//             ->getResult()
//         ;
//     }
}
