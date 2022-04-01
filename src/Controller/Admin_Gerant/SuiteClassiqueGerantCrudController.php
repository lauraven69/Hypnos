<?php

namespace App\Controller\Admin_Gerant;

use App\Entity\SuiteClassiqueGerant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SuiteClassiqueGerantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SuiteClassiqueGerant::class;
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
