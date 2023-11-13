<?php

namespace App\Controller\Admin;

use App\Entity\Doctor;
use Doctrine\ORM\Mapping\Builder\FieldBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class DoctorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Doctor::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
          // IdField::new('id'),
            TextField::new('firstName'),
            TextField::new('lastName'),
            AssociationField::new('specjalizacja')->renderAsNativeWidget(),
            
        ];
    }
    
}
