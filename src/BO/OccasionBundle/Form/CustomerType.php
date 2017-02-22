<?php

namespace BO\OccasionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

//*****************************************************************
/*use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;*/
use Symfony\Component\Form\Extension\Core\Type\TextType;
//*******************************************************************

class CustomerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('lnamecust',       TextType::class
                        , array(
                        'label'=>'Nom',
                        'attr' => array(
                        'placeholder' => 'Nom',
                        )))
                ->add('fnamecust',       TextType::class
                        , array(
                        'label'=>'Prénom',
                        'attr' => array(
                        'placeholder' => 'Prénom',
                        )))
                ->add('telcust',         TextType::class
                        , array(
                        'label'=>'Téléphone',
                        'attr' => array(
                        'placeholder' => 'xx xxx xxx',
                        )))
                ->add('governate',       EntityType::class, array(
                            'class'        => 'BOOccasionBundle:Governate',
                            'choice_label' => 'name',
                            'multiple'     => false,
                            'expanded'     => false, 
                      ))
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BO\OccasionBundle\Entity\Customer'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bo_occasionbundle_customer';
    }


}
