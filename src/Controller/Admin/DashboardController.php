<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\User;
use App\Entity\Contact;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;


class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('La Buissoniere - Administration')
            ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', User::class);
        //yield MenuItem::subMenu('Commissions', 'fas fa-newspaper')->setSubItems([
        yield MenuItem::linkToCrud('Commisions', 'fas fa-newspaper', Category::class);
        //yield MenuItem::linkToCrud(label:'Ajouter', icon:'fas fa-plus', entityFqcn:Category::class)->setAction(actionName:Crud::PAGE_NEW),  
        //]); 
        yield MenuItem::linkToCrud('Demandes de contact', 'fas fa-envelope', Contact::class);
    }
}



// <?php

// namespace App\Controller\Admin;

// use Symfony\Component\HttpFoundation\Response;
// use App\Controller\Admin\CategoryCrudController;
// use App\Entity\Category;
// use App\Entity\User;
// use App\Entity\Menu;
// use Symfony\Component\Routing\Annotation\Route;
// use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
// use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
// use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
// use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
// use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;


//class DashboardController extends AbstractDashboardController
//{
    //  public function __construct(
    //     private AdminUrlGenerator $adminUrlGenerator
    // ) 
    // {}
    // #[Route('/admin', name: 'admin')]
    // public function index(): Response
    // {
    //         //ca c'est juste pour récuperer notre URL()
    //    $url =  $this->adminUrlGenerator->setController(CategoryCrudController::class)
    //     ->generateUrl();
        
    //     return $this->redirect($url);

    // }

    // public function configureDashboard(): Dashboard
    // {
    //     return Dashboard::new()
    //         ->setTitle('Labuissoniere');
    // }

    //  public function configureMenuItems(): iterable
    //  {
    //      yield  MenuItem::linkToRoute('retour vers le site', 'fa fa-home', 'app_home');

    //      yield MenuItem::subMenu('Commissions', 'fas fa-newspaper')->setSubItems([
    // //         //on utilise une methode stattique avec linktoCrud
    //            MenuItem::linkToCrud(label:'Toutes les commissions', icon:'fas fa-list', entityFqcn: Category::class),
    //            MenuItem::linkToCrud(label:'Ajouter', icon:'fas fa-plus', entityFqcn:Category::class)->setAction(actionName:Crud::PAGE_NEW),   
    //      ]);
         //yield MenuItem::linkToCrud('Personne en Charge de commissions', 'fas fa-newspaper')->setSubItems([
               //MenuItem::linkToCrud(label:'Ajouter', icon:'fas fa-list', entityFqcn: User::class),
    //           MenuItem::linkToCrud(label:'Ajouter', icon:'fas fa-plus', entityFqcn:Delegue::class)->setAction(actionName:Crud::PAGE_NEW),
      //   ]);
    //     yield MenuItem::subMenu('Menus', 'fas fa-list')->setSubItems([
    //           MenuItem::linkToCrud('Delegues', 'fas fa-newspaper', Menu::class),
    //           MenuItem::linkToCrud('Liens personnalisés', 'fas fa-link', Menu::class),
    //           MenuItem::linkToCrud('Catégories', 'fab fa-delicious', Menu::class),

         //]);
    // }
//}
