<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class UserController extends AbstractController
{
    //On va recuperer l'utilisateur courant
    /**
     * This controller allow us to edit user's profile
     *
     * @param User $choosenUser
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/utilisateur/edition/{id}', name: 'user.edit' , methods: ['GET', 'POST'])]
    public function edit(User $user, Request $request, EntityManagerInterface $manager): Response
    {
        // on va verifier que ce n'est pas un autre utilsateur et si il est connecte si c pas le cas on le renvoie sur la page login
        if (!$this->getUser()) {
            return $this->redirectToRoute('security.login');
        }
        // si le meme utilisateur qui est récupéré par rapport à notre id {id}
        if (!$this->getUser() !== $user) {
            // si ce petit salopio essayes de modifier un autre profil que le sien on le renvoi a ces article ( Entity d'ailleur a creer)
            return $this->redirectToRoute('article.index');
        }
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $manager->persist($user);
            $manager->flush();
            
            
            $this->addFlash(
                    'success',
                    'Les informations de changement de votre compte ont bien été modifiées.'
                );
                return $this->redirectToRoute('article.index');
            }
        


        return $this->render('pages/user/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
