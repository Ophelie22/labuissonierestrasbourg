<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\User;
// //use App\Entity\Delegue;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
// use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('name', 'Nom de la commission');
        yield ColorField::new('color');
        yield SlugField::new('slug')->setTargetFieldName('name');
        yield AssociationField::new('user');

//                 //AssociationField::new('delegues', 'Nom du responsable de la commission')
    }
}

// }
