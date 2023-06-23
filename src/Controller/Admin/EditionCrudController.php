<?php

namespace App\Controller\Admin;

use App\Entity\Edition;
use DateTime;
use Symfony\Component\DomCrawler\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Symfony\Component\DomCrawler\Field\TextareaFormField;

class EditionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Edition::class;
    }

     
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            DateField::new('birthday'),
            TextareaFormField::('description'),
            ImageField::new('logo')            
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
                ->setBasePath('images/logoEdiction/')
                ->setUploadDir('public/images/logoEdiction/'),

        ];
    }
    
    
}
