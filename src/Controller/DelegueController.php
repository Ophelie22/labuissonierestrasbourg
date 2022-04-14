<?php

namespace App\Controller;

use App\Entity\Delegue;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DelegueController extends AbstractController
{
    #[Route('/delegue',name: 'app_delegue')]
    public function index(): Response
    {
        return $this->render('delegue/index.html.twig', [
            'controller_name' => 'DelegueController',
        ]);
    }
}
