<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Utilisateurs')
            ->setEntityLabelInSingular('Utilisateur');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id')
                //->hideOnForm(),
            TextField::new('fullName'),
            TextField::new('pseudo'),
            TextField::new('email'),
            ArrayField::new('roles'),
            AssociationField::new('category'),

            // PasswordType::new('password'),
            // ArrayField::new['categories'],
        ];
    }
}
