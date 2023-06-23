<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
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
            TextField::new('firstname', 'Prénom')
                ->setHelp('Veuillez renseigner un prénom.'),
            TextField::new('lastname', 'Nom')
                ->setHelp('Veuillez renseigner un nom.'),
            EmailField::new('email', 'Adresse email')
                ->setHelp('Veuillez renseigner une adresse email valide.'),
            TextField::new('phone', 'Téléphone')
                ->setHelp('Veuillez renseigner un numéro de téléphone.')
                ->hideOnIndex(),

            TextField::new('password')->onlyOnForms(),
            TextField::new('address', 'Adresse')
                ->setHelp('Veuillez renseigner une adresse.')
                ->hideOnIndex(),
            TextField::new('city', 'Ville')
                ->setHelp('Veuillez renseigner une ville.')
                ->hideOnIndex(),
            TextField::new('postal', 'Code postal')
                ->setHelp('Veuillez renseigner un code postal.')
                ->hideOnIndex(),
            TextField::new('country', 'Pays')
                ->setHelp('Veuillez renseigner un pays.')
                ->hideOnIndex(),

            BooleanField::new('caution', 'Caution déposée ?')
                ->setHelp('Cochez la case si la caution a été déposée.'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::SAVE_AND_ADD_ANOTHER);
    }
}
