<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home.page')]
    public function home(ArticleRepository $articleRepository): Response
    {
        return $this->render('pages/home.html.twig', [
            'articles'=> $articleRepository->findPublicArticle(4)
            //'categories' => $categoryRepository->findAll()
        ]);
    }
    
    #[Route('/', name: 'index')]
    
    public function index(): Response
    {
        return $this->redirectToRoute('home.page');
    }
}
    