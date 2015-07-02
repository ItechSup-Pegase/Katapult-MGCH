<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TeacherType extends AbstractType
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
            ->add('sexe', 'choice', array('choices' => array('m' => 'Masculin', 'f' => 'Féminin')))
            ->add('address',  new AddressType(), array('data_class' => 'AppBundle\Entity\Address'));
    }
    
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Teacher'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_teacher';
    }
}
