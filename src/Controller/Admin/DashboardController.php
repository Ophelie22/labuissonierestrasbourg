<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use App\Controller\Admin\CategoryCrudController;
use App\Entity\Category;
use App\Entity\Delegue;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;


class DashboardController extends AbstractDashboardController
{
     public function __construct(
        private AdminUrlGenerator $adminUrlGenerator
    ) 
    {}
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
            //ca c'est juste pour récuperer notre URL()
       $url =  $this->adminUrlGenerator->setController(CategoryCrudController::class)
        ->generateUrl();
        
        return $this->redirect($url);

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Labuissoniere');
    }

    public function configureMenuItems(): iterable
    {
        yield  MenuItem::linkToRoute('retour vers le site', 'fa fa-home', 'app_home');

        yield MenuItem::subMenu('Commissions', 'fas fa-newspaper')->setSubItems([
            //on utilise une methode stattique avec linktoCrud
              MenuItem::linkToCrud(label:'Toutes les categories', icon:'', entityFqcn: Category::class),
              MenuItem::linkToCrud(label:'Ajouter', icon:'fas fa-plus', entityFqcn:Category::class)->setAction(actionName:Crud::PAGE_NEW),
        
        ]);
        yield MenuItem::subMenu('Personne en Charge de commissions', 'fas fa-newspaper')->setSubItems([
                MenuItem::linkToCrud(label:'Tout les délégués', icon:'', entityFqcn: Delegue::class),
             MenuItem::linkToCrud(label:'Ajouter', icon:'fas fa-plus', entityFqcn:Delegue::class)->setAction(actionName:Crud::PAGE_NEW),
             MenuItem::linkToCrud(label:'Personne responsable ', icon:'fas fa-list', entityFqcn:Delegue::class)

        ]);
        
    }
}
