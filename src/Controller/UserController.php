<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\UserPasswordType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    // On va recuperer l'utilisateur courant avec l'id et la apram converter
    /**
     * This controller allow us to edit user's profile.
     *
     * @param User                   $choosenUser
     * @param Request                $request
     * @param EntityManagerInterface $manager
     * @return Response
     */ 
    #[Security("is_granted('ROLE_USER') and user === choosenUser")]
    #[Route('/utilisateur/edition/{id}', name: 'user.edit', methods: ['GET', 'POST'])]
    public function edit(User $choosenUser, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher): Response
    // Si on veut rajouter la verif avec un mdp on doit rajouter le UserPasswordHasherInterface $hasher
    {
        // on va verifier que ce n'est pas un autre utilsateur et si il est connecte si c pas le cas on le renvoie sur la page login
        //if (!$this->getUser()) {
            //return $this->redirectToRoute('security.login');
        //}
        // si le meme utilisateur qui est récupéré par rapport à notre id {id}
        //if (!$this->getUser() !== $user) {
            // si ce petit salopio essayes de modifier un autre profil que le sien on le renvoi a ces article ( Entity d'ailleur a creer)
            //return $this->redirectToRoute('article.index');
        //}
        $form = $this->createForm(UserType::class, $choosenUser);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
             if($hasher->isPasswordValid($choosenUser, $form->getData()->getPlainPassword()))
            $user = $form->getData();
            $manager->persist($user);
            $manager->flush();

            $this->addFlash(
                    'success',
                    'Les informations de changement de votre compte ont bien été modifiées.'
                );

            return $this->redirectToRoute('article.index');
       // }else{
            //$this->addFlash(
            //'warning',
            //'Le mot de passe est éronné.'
           // );
        }

        return $this->render('pages/user/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Cette route sera uniquement accessible pour les admins
    #[Security("is_granted('ROLE_USER') and user === choosenUser")]
    #[Route('/utilisateur/edition-mot-de-passe/{id}', 'user.edit.password', methods: ['GET', 'POST'])]
    public function editPassword( User $choosenUser, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher ): Response
    {
        $form = $this->createForm(UserPasswordType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if($hasher->isPasswordValid($choosenUser, $form->getData()['plainPassword']))
            {
                $choosenUser->setUpdatedAt(new \DateTimeImmutable());
                $choosenUser->setPlainPassword(
                    $form->getData()['newPassword']
                );

                $this->addFlash(
                    'success',
                    'Le mot de passe a bien été modifié.'
                );

                $manager->persist($choosenUser);
                $manager->flush();

                return $this->redirectToRoute('article.index');
            } else {
                $this->addFlash(
                    'warning',
                    'Le mot de passe renseigné est incorrect.'
                );
            }
        }

        return $this->render('pages/user/edit_password.html.twig', [ 
        'form'=> $form->createView()
        ]);
    }
}