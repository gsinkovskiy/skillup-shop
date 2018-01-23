<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class OrderAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('user')
            ->add('createdAt')
            ->add('customerName')
            ->add('phone')
            ->add('email')
            ->add('address')
            ->add('status')
            ->add('isPaid')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('user')
            ->add('createdAt')
            ->add('count')
            ->add('amount')
            ->add('customerName')
            ->add('phone')
            ->add('email')
            ->add('address')
            ->add('status')
            ->add('isPaid')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('user')
            ->addIdentifier('createdAt')
            ->addIdentifier('count')
            ->addIdentifier('amount')
            ->addIdentifier('customerName')
            ->addIdentifier('phone')
            ->addIdentifier('email')
            ->addIdentifier('address')
            ->addIdentifier('status')
            ->add('isPaid')
        ;
    }

}
