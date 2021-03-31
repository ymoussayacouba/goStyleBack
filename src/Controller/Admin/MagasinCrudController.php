<?php

namespace App\Controller\Admin;

use App\Entity\Magasin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MagasinCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Magasin::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id', 'id')->onlyOnIndex(),
            TextField::new('nom'),
            TextField::new('adresse'),
        ];
    }
}
