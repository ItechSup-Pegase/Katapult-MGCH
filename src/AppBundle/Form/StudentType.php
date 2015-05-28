<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface; 

class StudentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('firstName')
            ->add('lastName')
            ->add('phone')
            ->add('mail')
            ->add('sexe')
            ->add('client', null, array('property'=> 'entreprise'))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Student',
            'cascade_validation' => true,
        
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_student';
    }
}
