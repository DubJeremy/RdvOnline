<?php

namespace App\Controller\Admin;

use App\Entity\Professionel;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProfessionelCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Professionel::class;
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
