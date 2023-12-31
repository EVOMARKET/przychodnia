<?php

namespace App\Controller\Admin;

use App\Entity\Doctor;
use Doctrine\ORM\Mapping\Builder\FieldBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use Symfony\Bundle\MakerBundle\Doctrine\EntityDetails;


class DoctorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Doctor::class;
    }
    public function configureActions (Actions $actions): Actions
    {
            return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
          // IdField::new('id'),
            TextField::new('firstName','Imię'),
            TextField::new('lastName','Nazwisko'),
            AssociationField::new('specjalizacja')->renderAsNativeWidget(),
            AssociationField::new('visits')->renderAsNativeWidget(),
         
            
        ];
    }
  
    
}
