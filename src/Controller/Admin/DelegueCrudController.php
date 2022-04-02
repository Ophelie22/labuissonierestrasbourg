<?php

namespace App\Controller\Admin;

use App\Entity\Delegue;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DelegueCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Delegue::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
