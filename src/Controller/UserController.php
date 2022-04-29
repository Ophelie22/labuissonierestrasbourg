<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    //On va recuperer l'utilisateur courant
    
    #[Route('/utilisateur/edition/{id}', name: 'user.edit')]
    public function edit(User $user): Response
    {
        // on va verifier que ce n'est pas un autre utilsateur et si il est connecte si c pas le cas on le renvoie sur la page login
        if (!$this->getUser()) {
            return $this->redirectToRoute('security.login');
        }
        // si le meme utilisateur qui est récupéré par rapport à notre id {id}
        if (!$this->getUser() === $user) {
            // si ce petit salopio essayes de modifier un autre profil que le sien on le renvoi a ces article ( Entity d'ailleur a creer)
            return $this->redirectToRoute('article.index');
        }
        $form = $this->createForm(UserType::class, $user);

        return $this->render('pages/user/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
