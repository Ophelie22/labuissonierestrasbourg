<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home.index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('pages/home.html.twig', [
            'categories' => $categoryRepository->findAll()
        ]);
    }
}
