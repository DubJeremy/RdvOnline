<?php

namespace App\Controller\Admin;

use App\Entity\ProCategorie;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProCategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProCategorie::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nameCategorie'),
        ];
    }
    
}
