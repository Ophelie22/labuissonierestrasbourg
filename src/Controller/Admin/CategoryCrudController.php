<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        
        return [
                TextField::new('name', 'Nom de la commission'),
                SlugField::new('slug')->setTargetFieldName('name'),
                ColorField::new('color'),
                TextField::new('delegue', 'Nom du responsable de la commission')
        ];
        
    }
    //  public function viewArticle(AdminContext $context): Response
    // {
    //     /** @var Article $article */
    //     $article = $context->getEntity()->getInstance();

    //     return $this->redirectToRoute('article_show', [
    //         'slug' => $article->getSlug()
    //     ]);
    // }
}
