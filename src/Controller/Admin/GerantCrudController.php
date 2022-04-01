<?php

namespace App\Controller\Admin;

use App\Entity\Gerant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GerantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Gerant::class;
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
