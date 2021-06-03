<?php

namespace App\Controller\Admin;

use App\Entity\Professionel;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProfessionelCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Professionel::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('idProCategorie'),
            AssociationField::new('idJob'),
            TextField::new('adress'),
            MoneyField::new('price')->setCurrency('EUR'),
            TextField::new('companyName'),
        ];
    }
    
}
