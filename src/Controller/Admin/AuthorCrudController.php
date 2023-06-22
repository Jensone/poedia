<?php

namespace App\Controller\Admin;

use App\Entity\Author;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AuthorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Author::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('Fiche auteur')
                ->setHelp('Remplissez les champs pour créer une fiche auteur. Pour ajouter une photo, cliquez sur "Photo" en bas de page.'),
            TextField::new('firstname'),
            TextField::new('lastname'),
            TextField::new('nationality'),
            TextEditorField::new('description'),
            DateField::new('birthday'),
            ImageField::new('photo')
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
                ->setBasePath('images/author/')
                ->setUploadDir('public/images/author/'),
        ];
    }
}
