<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ClientCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Client::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('Fiche client')
                ->setHelp('Remplissez les champs pour créer une fiche client. Pour ajouter une photo, cliquez sur "Photo" en bas de page.'),
            TextField::new('firstname'),
            TextField::new('lastname'),
            TextField::new('email'),
            TextField::new('phone'),
            TextField::new('address'),
            TextField::new('city'),
            TextField::new('postal'),
            TextField::new('country'),
            ImageField::new('photo')
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
                ->setBasePath('images/client/')
                ->setUploadDir('public/images/client/'),
        ];
    }
}
