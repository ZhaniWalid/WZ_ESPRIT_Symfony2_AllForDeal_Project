<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UtilisateurType
 *
 * @author Edzio
 */

namespace Pidev\AllForDealBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilisateurType extends AbstractType{

    
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prnm')
            ->add('address')
            ->add('email')   
            ->add('mobile')
            ->add('status')
            ->add('login')
            ->add('pwd')
            ->add('sexe')    
            ->add('Register','submit')    
        ;
    }
    
     /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\AllForDealBundle\Entity\Utilisateur'
        ));
    }
    
   /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_allfordealbundle_utilisateur';
    }

}
