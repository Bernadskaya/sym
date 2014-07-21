<?php

namespace Ant\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrderFormType extends AbstractType
{
   /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text', array (
                'required' => true,
                'attr' => array('class'=>'form-control'),
                'label'=>'order.name'))
            ->add('surname','text', array (
                'required' => true,
                'attr' => array('class'=>'form-control'),
                'label'=>'order.surname'))
            ->add('email','email', array (
                'required' => true,
                'attr' => array('class'=>'form-control'),
                'label'=>'order.email'))
            ->add('phone','text', array (
                'required' => true,
                'attr' => array('class'=>'form-control'),
                'label'=>'order.phone'))
            ->add('text','textarea', array (
                'required' => true,
                'attr' => array('class'=>'form-control'),
                'label'=>'order.text'))
            ->add('agreement','checkbox', array (
                'required' => true,
                'value'=>true,
                'attr' => array(
                    'class'=>'form-control',
                    'checked' => 'checked',
                    'label'=>'order.agreement')
            ))
            ->add('captcha', 'captcha');
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ant\WebBundle\Entity\OrderForm',
            'translation_domain' => 'AntWebBundle'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ant_bundle_orderform';
    }
}
