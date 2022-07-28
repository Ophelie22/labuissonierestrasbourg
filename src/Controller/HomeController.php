<?php

namespace App\Controller;


use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function home(ArticleRepository $articleRepository): Response
    {
        return $this->render('pages/home.html.twig', [
            //'controller_name' => 'HomeController',
            'articles'=> $articleRepository->findPublicArticle(4)
        ]);
    }

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->redirectToRoute('home.page');
    }
}
// class HomeController extends AbstractController
// {
//     #[Route('/home', name: 'home.page')]
//     public function home(ArticleRepository $articleRepository): Response
//     {
//         return $this->render('pages/home.html.twig', [
//             'articles'=> $articleRepository->findPublicArticle(4)
//             //'categories' => $categoryRepository->findAll()
//         ]);
//     }
    
//     #[Route('/', name: 'index')]
    
//     public function index(): Response
//     {
//         return $this->redirectToRoute('home.page');
//     }
// }
    