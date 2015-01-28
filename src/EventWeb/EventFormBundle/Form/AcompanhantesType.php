<?php

namespace EventWeb\EventFormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AcompanhantesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroMaximo')
            ->add('Regra')
            ->add('Categoria')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EventWeb\EventFormBundle\Entity\Acompanhantes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'eventweb_eventformbundle_acompanhantes';
    }
}
