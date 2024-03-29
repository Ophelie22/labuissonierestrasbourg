<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(ArticleRepository $articleRepository): Response
    {
        return $this->render('pages/home.html.twig', [
            //'controller_name' => 'HomeController',
            'articles' => $articleRepository->findPublicArticle(4),
        ]);
    }
}