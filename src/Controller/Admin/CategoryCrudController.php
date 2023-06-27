<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use Symfony\Component\Validator\Constraints\Length;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Component\Validator\Constraints\NotBlank;
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
            TextField::new('name', 'Nom')
            ->setHelp ('Nommer la nouvelle catégorie'),
            TextEditorField::new('description')
            ->setHelp ('Une description est la bienvenue'),
            ImageField::new('cover')
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
                ->setBasePath('images/category/')
                ->setUploadDir('public/images/category/')
                ->setHelp ('Ajouter une image pour illustrer cette nouvelle catégorie'),
        ];
    }
    
}
