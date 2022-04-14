<?php

namespace App\EventSubscriber;

//use App\Entity\Delegue;
use App\Model\TimestampedInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EasyAdminSubscriber implements EventSubscriberInterface
{
  //on va utiliser ces fonctions lorsqu'on ne souhaite pas par exemple mettre la date de creétion dans notre easy admin alors que celle
  //ci est obligatoire
    public static function getSubscribedEvents(): array
    {
        return [
          //on utilise alors le before persisty event en faite c'est les fonctions qui seront executés avant la crétion d'une entités
            BeforeEntityPersistedEvent::class => ['setEntityCreatedAt'],
            //BeforeEntityUpdatedEvent::class => ['setEntityUpdatedAt'],
        ];
    }

    public function setEntityCreatedAt(BeforeEntityPersistedEvent $event)
    {
      //ON va devoir creeer une interface (Dossier Model)
       $entity = $event->getEntityInstance();
      //si l'entite n'est pas une instance de Timestanceinterface on arrete tt
       if (!$entity instanceof TimestampedInterface) {
           return;
       }
       $entity->setCreatedAt(new \DateTime());
    }

    // public function setEntityUpdatedAt(BeforeEntityUpdatedEvent $event): void
    // {
    //     $entity = $event->getEntityInstance();
    //     if (!$entity instanceof TimestampedInterface) {
    //         return;
    //     }
    //     $entity->setUpdatedAt(new \DateTime());
    // }
}