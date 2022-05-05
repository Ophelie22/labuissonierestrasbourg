<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Form\CategoryType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    // on va utiliser cette route pour voir les differentes category
    #[Route('/category/{slug}', name: 'category_show')]
    public function show(?Category $category): Response
    {
        if (!$category) {
            return $this->redirectToRoute(route: 'home.index');
        }

        return $this->render('pages/category/show.html.twig', [
            'category' => $category,
        ]);
    }
    /**
     * This controller display all categories
     *
     * @param categoryRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */

    // Index des categories On va mettre en place le CRUD et bloqueras l'accés des routes suivant le rôle
    #[Route('/category', name: 'category.index', methods: ['GET'])]
    public function index(
        CategoryRepository $repository, PaginatorInterface $paginator, Request $request
    ): Response {
     
        $categories = $paginator->paginate(
            // je veux afficher uniquement les categories relié à l'utilisateur courant
            //methode distribuee par notre abstractcontroller
            //$repository->findBy(['user' => $this->getUser()]),
            $repository->findAll(),
            $request->query->getInt('page', 1),
            7
        );

        return $this->render('pages/category/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    /**
     * ce controlleur pour creer une categorie. On rajoutera le role user is granted plus tard
     *
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/category/creation', 'category.new')]
    public function new(
        Request $request,
        EntityManagerInterface $manager
    ): Response {
        $category = new Category;
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData();
            $category->setUser($this->getUser());

            $manager->persist($category);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre ingrédient a été créé avec succès !'
            );

            return $this->redirectToRoute('category.index');
        }

        return $this->render('pages/category/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

}