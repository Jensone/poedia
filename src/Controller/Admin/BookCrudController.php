<?php

namespace App\Controller\Admin;

use App\Entity\Book;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BookCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Book::class;
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
            AssociationField::new('stock')
                ->setCrudController(StockCrudController::class),
            ImageField::new('cover')
            ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
            ->setBasePath('images/book/')
            ->setUploadDir('public/images/book/'),
            TextEditorField::new('description'),
        ];
    }
    
}
