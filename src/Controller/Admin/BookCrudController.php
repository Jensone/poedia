<?php

namespace App\Controller\Admin;

use App\Entity\Book;
use App\Controller\Admin\StockCrudController;
use App\Controller\Admin\AuthorCrudController;
use App\Controller\Admin\FormatCrudController;
use App\Controller\Admin\EditionCrudController;
use App\Controller\Admin\CategoryCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BookCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Book::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::SAVE_AND_ADD_ANOTHER);
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre')
                ->setHelp('Le titre du livre à ajouter'),

            TextField::new('isbn', 'ISBN')
                ->setHelp("L'ISBN du livre à ajouter")
                ->hideOnIndex(),

            IntegerField::new('pages', 'Nombre de Pages')
                ->setHelp('Nombre de pages que contient le livre')
                ->hideOnIndex(),

            DateField::new('publicationDate', 'Date de publication')
                ->setHelp("Date du livre publié par l'éditeur"),

            AssociationField::new('category', 'Catégorie')
                ->setCrudController(CategoryCrudController::class)
                ->setHelp('La catégorie auquelle appartient le livre')
                ->hideOnIndex(),

            AssociationField::new('author', 'Auteur')
                ->setCrudController(AuthorCrudController::class)
                ->setHelp("L'auteur du livre"),

            AssociationField::new('edition', 'Edition')
                ->setCrudController(EditionCrudController::class)
                ->setHelp("La maison d'édition du livre"),

            AssociationField::new('format', 'Format')
                ->setCrudController(FormatCrudController::class)
                ->setHelp('Le format du livre'),
                
            AssociationField::new('stock', 'Stock')
                ->setCrudController(StockCrudController::class)
                ->setHelp('Combien il en reste en stock')
                ->hideOnIndex(),

            ImageField::new('cover', 'Couverture')
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
                ->setBasePath('images/book/')
                ->setUploadDir('public/images/book/')
                ->setHelp('La première de couverture du livre'),

            TextareaField::new('description', 'Description')
                ->setHelp("Un résumé de l'histoire")
                ->hideOnIndex(),
        ];
    }
}
