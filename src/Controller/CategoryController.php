<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Form\CategoryType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    // on va utiliser cette route pour voir les differentes category
    // #[Route('/category/{slug}', name: 'category_show')]
    // public function show(?Category $category): Response
    // {
    //     if (!$category) {
    //         return $this->redirectToRoute(route: 'home.index');
    //     }

    //     return $this->render('pages/category/show.html.twig', [
    //         'category' => $category,
    //     ]);
    // }
    /**
     * This controller display all categories
     *
     * @param categoryRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    // Index des categories On va mettre en place le CRUD et bloqueras l'accés des routes suivant le rôle
    #[IsGranted('ROLE_USER')]
    #[Route('/category', name: 'category.index', methods: ['GET'])]
    
    public function index(
        CategoryRepository $repository, PaginatorInterface $paginator, Request $request
    ): Response {
     
        $categories = $paginator->paginate(
            // je veux afficher uniquement les categories relié à l'utilisateur courant
            //methode distribuee par notre abstractcontroller
            $repository->findBy(['user' => $this->getUser()]),
            //$repository->findAll(),
            $request->query->getInt('page', 1),
            7
        );

        return $this->render('pages/category/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    /**
     * ce controlleur pour creer une categorie.
     *
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[IsGranted('ROLE_USER')]
    #[Route('/category/creation', 'category.new', methods: ['GET', 'POST'])]
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
                'Votre categorie a été créé avec succès !'
            );

            return $this->redirectToRoute('category.index');
        }

        return $this->render('pages/category/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
      /**
     * Un controlleur pour editer nos categories 
     * On veut que l'utilsateur puisse modifier uniquement les commission qui lui appatiennet
     * 
     * @param Category $iCategory
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Security("is_granted('ROLE_USER') and user === category.getUser()")]
    #[Route('/category/edition/{id}', 'category.edit', methods: ['GET', 'POST'])]
    public function edit(
        Category $category,
        Request $request,
        EntityManagerInterface $manager
    ): Response {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData();

            $manager->persist($category);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre category de commission a été modifié avec succès !'
            );

            return $this->redirectToRoute('category.index');
        }

        return $this->render('pages/category/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Un controlleur pour supprimer nos categories
     * 
     */
    #[Security("is_granted('ROLE_USER') and user === category.getUser()")]
    #[Route('/category/suppression/{id}', 'category.delete', methods: ['GET'])]
        public function delete(
        EntityManagerInterface $manager,
        Category $category
    ): Response {
        $manager->remove($category);
        $manager->flush();

        $this->addFlash(
            'success',
            'Votre commission a été supprimé avec succès !'
        );

        return $this->redirectToRoute('category.index');
    }
}

