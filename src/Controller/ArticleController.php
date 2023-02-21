<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Mark;
use App\Form\ArticleType;
use App\Form\MarkType;
use App\Repository\ArticleRepository;
use App\Repository\MarkRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FileUploader;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\String\Slugger\SluggerInterface;

class ArticleController extends AbstractController
{
    /**
     * This controller display all recipes.
     *
     * @param RecipeRepository   $repository
     * @param PaginatorInterface $paginator
     * @param Request            $request
     *
     * @return Response
     */
    //#[IsGranted('ROLE_USER')]
    #[Route('/article', name: 'article.index', methods: ['GET'])]
    public function index(ArticleRepository $repository, PaginatorInterface $paginator, Request $request): Response
    {
        $articles = $paginator->paginate(
            $repository->findBy(['user' => $this->getUser()]),
         // $repository->findAll(),
            $request->query->getInt('page', 1),
            7
        );

        return $this->render('pages/article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    //#[IsGranted('ROLE_USER')]
    #[Route('/article/communaute', 'article.community', methods: ['GET'])]
    public function indexPublic(
        ArticleRepository $repository,
        PaginatorInterface $paginator,
        Request $request
    ): Response {
        $articles = $paginator->paginate(
            $repository->findPublicArticle(null),
            $request->query->getInt('page', 1),
                3
        );

        return $this->render('pages/article/community.html.twig', [// Notre méthode est crée dans notre repository
            'articles' => $articles,
        ]);
    }

    // Ajout d'un article
    /**
     * ce controlleur pour creer une categorie. On rajoutera le role user is granted plus tard.
     *
     * @param categoryRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request            $request
     * @param SluggerInterface   $sluggler  
     * @return Response
     */
    //#[IsGranted('ROLE_USER')]
    #[Route('/article/creation', 'article.new')]
    public function new(Request $request,EntityManagerInterface $manager,SluggerInterface $slugger)//: Response
    {
    $article = new Article();
    $form = $this->createForm(ArticleType::class, $article);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $article = $form->getData();
        $article->setUser($this->getUser());

        $documentFilename = $form->get('documentFilename')->getData();
        $article = $form->getData();
            $article->setUser($this->getUser());
            $manager->persist($article);
            $manager->flush();
            $this->addFlash(
                'success',
                'Votre article a été créé avec succès !'
            );

        // On utilise cette methode pour uploader et nommer de facon unique si elle a le meme nom
        //if ($documentFilename) {
            //$documentFilename = $fileUploader->upload($documentFilename);
            //$article->setDocumentFilename($documentFilename);
            // Methode pour rendre un nom unique
            // $originalFilename = pathinfo($documentFilename->getClientOriginalName(), PATHINFO_FILENAME);
            // $safeFilename = $slugger->slug($originalFilename);
            // $newFilename = $safeFilename.'-'.uniqid().'.'.$documentFilename->guessExtension();

            // try {
                //     $documentFilename->move(
                //         $this->getParameter('documents_directory'),
                //         $newFilename
                //     );
                //     } catch (FileException $e) {

                //     }
                //         $article->setDocumentFilename($newFilename);
            // }


            return $this->redirectToRoute('article.index');
        }

        return $this->renderForm('pages/article/new.html.twig', [
        'form' => $form,
        ]);
        
    }
    // edition
    //#[Security("is_granted('ROLE_USER') and user === article.getUser()")]
    #[Route('/article/edition/{id}', 'article.edit', methods: ['GET', 'POST'])]
    /**
     * This controller allow us to edit a Article.
     */
    public function edit(
        Article $article,
        Request $request,
        EntityManagerInterface $manager
    ): Response {
        // $article->setDocumentFilename(
        // new File($this->getParameter('documents_directory').'/'.$article->getDocumentFilename())
        // );

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
            'form' => $form->createView(),
        ]);
    }

    /**
     * This controller allow us to delete a article.
     *
     * @param EntityManagerInterface $manager
     * @param Article                $article
     *
     * @return Response
     */
    #[Route('/article/suppression/{id}', 'article.delete', methods: ['GET'])]
    #[Security("is_granted('ROLE_USER') and user === article.getUser()")]
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

    /**
     * This controller allow us to see a article if this one is public.
     *
     * @param Article $article
     *
     * @return Response
     */
    #[Security("is_granted('ROLE_USER') and (article.getIsPublic() === true || user === article.getUser())")]
    #[Route('/article/{id}', 'article.show', methods: ['GET', 'POST'])]
    public function show(
        Article $article,
        Request $request,
        MarkRepository $markRepository,
        EntityManagerInterface $manager
    ): Response {
        $mark = new Mark();
        $form = $this->createForm(MarkType::class, $mark);
        // $mark);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // dd($form->getData());
            $mark->setUser($this->getUser())
                ->setArticle($article);

            $existingMark = $markRepository->findOneBy([
                'user' => $this->getUser(),
                'article' => $article,
            ]);
            if (!$existingMark) {
                $manager->persist($mark);
            } else {
                $existingMark->setMark(
                    $form->getData()->getMark()
                );
            }

            $manager->flush();

            $this->addFlash(
                'success',
                'Votre note a bien été prise en compte.'
            );

            return $this->redirectToRoute('article.show', ['id' => $article->getId()]);
        }

        return $this->render('pages/article/show.html.twig', [
            'article' => $article,
            // 'article' => $article,
            'form' => $form->createView(),
        ]);
    }
}
