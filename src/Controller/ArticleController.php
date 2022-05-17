<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/article', name: 'article.index',  methods: ['GET'])]
    public function index(ArticleRepository $repository,PaginatorInterface $paginator,Request $request): Response
    {
        $articles = $paginator->paginate(
        $repository->findBy(['user' => $this->getUser()]),
        //$repository->findAll(),
        $request->query->getInt('page', 1),
            7
        );

        return $this->render('pages/article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    //Ajout d'un article
    /**
    * ce controlleur pour creer une categorie. On rajoutera le role user is granted plus tard
     * @param categoryRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    #[IsGranted('ROLE_USER')]
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

            return $this->redirectToRoute('article.index');
        }

        return $this->render('pages/article/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    //edition
    #[Security("is_granted('ROLE_USER') and user === article.getUser()")]
    #[Route('/article/edition/{id}', 'article.edit', methods: ['GET', 'POST'])]
    /**
    * This controller allow us to edit a Article
    *
    * @param Article $article
    * @param Request $request
    * @param EntityManagerInterface $manager
    * @return Response
    */
    public function edit(
        Article $article,
        Request $request,
        EntityManagerInterface $manager
    ): Response {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();

            $manager->persist($article);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre document a été modifié avec succès !'
            );

            return $this->redirectToRoute('article.index');
        }

        return $this->render('pages/article/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }
     /**
    * This controller allow us to delete a article
    * @param EntityManagerInterface $manager
    * @param Article $article
    * @return Response
    */
    #[Route('/article/suppression/{id}', 'article.delete', methods: ['GET'])]
    public function delete(
        EntityManagerInterface $manager,
        Article $article
    ): Response {
        $manager->remove($article);
        $manager->flush();

        $this->addFlash(
            'success',
            'Votre document a été supprimé avec succès !'
        );

        return $this->redirectToRoute('article.index');
    }
}

