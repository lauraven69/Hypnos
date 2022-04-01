<?php

namespace App\Controller\Admin_Gerant;

use App\Entity\EstablismentGerant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EstablismentGerantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return EstablismentGerant::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
