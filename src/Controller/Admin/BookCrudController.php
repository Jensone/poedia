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
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
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
        // ...
        ->add(Crud::PAGE_INDEX, Action::DETAIL)
        ->add(Crud::PAGE_EDIT, Action::SAVE_AND_ADD_ANOTHER)
    ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
           // IdField::new('id'),
            TextField::new('title'),
            IntegerField::new('isbn'),
            IntegerField::new('pages'),
            DateTimeField::new('publicationDate'),
            AssociationField::new('category')
            ->setCrudController(CategoryCrudController::class),
            AssociationField::new('author')
                ->setCrudController(AuthorCrudController::class),
            AssociationField::new('edition')
                ->setCrudController(EditionCrudController::class),
            AssociationField::new('format')
                ->setCrudController(FormatCrudController::class),
            // AssociationField::new('stock')
            //     ->setCrudController(StockCrudController::class),
            CollectionField::new('order')->setEntryType(OrderCrudController::class),
            ImageField::new('cover')
            ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
            ->setBasePath('images/book/')
            ->setUploadDir('public/images/book/'),
            TextEditorField::new('description'),
        ];
    }
    
}
