<?php

namespace App\Controller\Admin_Gerant;

use App\Entity\SuitePanoramiqueGerant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SuitePanoramiqueGerantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SuitePanoramiqueGerant::class;
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
