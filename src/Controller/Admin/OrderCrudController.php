<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use App\Controller\Admin\ClientCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OrderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Order::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            // ...
            ->add(Crud::PAGE_INDEX, Action::NEW)
            ->add(Crud::PAGE_EDIT, Action::SAVE_AND_ADD_ANOTHER);
    }

    public function configureFields(string $orderPage): iterable
    {
        return [

            AssociationField::new('client')
                ->setCrudController(ClientCrudController::class),

            // CollectionField::new('book')->allowAdd(false),

            DateTimeField::new('dateStart')
                ->setFormat('dd.MM.yyyy'),

            DateTimeField::new('dateEnd')
                ->setFormat('dd.MM.yyyy'),

            BooleanField::new('status')
        ];
    }
}
