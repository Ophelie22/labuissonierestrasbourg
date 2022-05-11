<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'article.index')]
    public function index(): Response
    {
        return $this->render('pages/article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    //Ajout d'un article
    /**
     * ce controlleur pour creer une categorie. On rajoutera le role user is granted plus tard
     *
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/article/nouveau', 'article.new')]
    public function new(
        Request $request,
        EntityManagerInterface $manager
    ): Response {
        $article = new Article;
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $article->setUser($this->getUser());

            $manager->persist($article);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre article a été créé avec succès !'
            );

            return $this->redirectToRoute('category.index');
        }

        return $this->render('pages/category/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
