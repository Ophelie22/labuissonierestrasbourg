<?php

namespace App\Controller\Admin;

use App\Entity\Menu;
use App\Repository\MenuRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\HttpFoundation\RequestStack;

class MenuCrudController extends AbstractCrudController
{
    // const MENU_DELEGUES = 0;
    public const MENU_LINKS = 1;
    public const MENU_CATEGORIES = 2;

    public function __construct(private MenuRepository $menuRepo, private RequestStack $requestStack)
    {
    }

    public static function getEntityFqcn(): string
    {
        return Menu::class;
    }

    // on va creer une fonctions pour avoir le ss menu
    public function configureCrud(Crud $crud): Crud
    {
        $subMenuIndex = $this->getSubMenuIndex();
        $entityLabelInSingular = 'un menu';
        $entityLabelInPlural = match ($subMenuIndex) {
            // self::MENU_DELEGUES => 'Délégués de commission',
            self::MENU_LINKS => 'Liens personnalisés',
            self::MENU_CATEGORIES => 'Catégories',
        };

        return $crud
            ->setEntityLabelInSingular($entityLabelInSingular)
            ->setEntityLabelInPlural($entityLabelInPlural);
    }
    // public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
    // {
    //     $subMenuIndex = $this->getSubMenuIndex();

    //     return $this->menuRepo->getIndexQueryBuilder($this->getFieldNameFromSubMenuIndex($subMenuIndex));
    // }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('name', 'Titre de la navigation'),
            NumberField::new('menuOrder', 'Ordre'),
            BooleanField::new('isVisible', 'Visible'),
        ];
    }

    private function getSubMenuIndex(): int
    {
        return $this->requestStack->getMainRequest()->query->getInt('submenuIndex');
    }
}
