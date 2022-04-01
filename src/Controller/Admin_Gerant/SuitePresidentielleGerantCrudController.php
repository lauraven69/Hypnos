<?php

namespace App\Controller\Admin_Gerant;

use App\Entity\SuitePresidentielleGerant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SuitePresidentielleGerantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SuitePresidentielleGerant::class;
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
