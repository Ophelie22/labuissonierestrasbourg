<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{

    // on va utiliser cette route pour voir les differentes category
    #[Route('/category/{slug}', name: 'category_show')]
    public function show(?Category $category): Response
    {  
        if(!$category) {
            return $this->redirectToRoute(route: 'home.index');
        }

        return $this->render('category/show.html.twig', [
            'category' => $category ,
        ]);
    }
    #[Route('/category', name: 'category.index', methods: ['GET'])]
    public function index(
        IngredientRepository $repository,
        PaginatorInterface $paginator,
        Request $request
    ): Response {
        $ingredients = $paginator->paginate(


}
