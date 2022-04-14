<?php

namespace App\Controller\Admin;

use App\Entity\Delegue;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;



class DelegueCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Delegue::class;
    }
    
    public function configureFields(string $pageName): iterable
    {
       
            //IdField::new('id'),
        return [  
            TextField::new('title'),
            TextField::new('nomresponsable'),
            TextEditorField::new('content'),
            TextareaField::new('featuredText', 'Texte mis en avant'),
        //on va cacher la date au niveau du back end
            DateTimeField::new('createdAt')->hideOnForm(),
        //yield DateTimeField::new('updatedAt')->hideOnForm();
        //yield TextEditorField::new('categories');
        ];
        
    }
    
}
