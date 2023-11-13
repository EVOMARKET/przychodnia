<?php

namespace App\Controller\Admin;

use App\Entity\Visit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class VisitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Visit::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
           // IdField::new('id'),
          //  TextField::new('title'),
          //  TextEditorField::new('description'),
        DateField::new('startDate'),
        DateField::new('endDate'),
        AssociationField::new('doctor')->renderAsNativeWidget(),
        AssociationField::new('patient')->renderAsNativeWidget(),
        ];
    }
    
}
