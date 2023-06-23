<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
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
                ->setHelp('Remplissez les champs pour créer une fiche client.'),
            TextField::new('firstname'),
            TextField::new('lastname'),
            EmailField::new('email'),
            TextField::new('phone'),
            TextField::new('address'),
            TextField::new('city'),
            TextField::new('postal'),
            TextField::new('country'),
            
        ];
    }
}
