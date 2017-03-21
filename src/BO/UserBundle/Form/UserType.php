<?php

namespace BO\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
/************************************************************/
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username')
                ->add('password',     PasswordType::class
                        , array(
                        'label'       =>'Mot de passe',
                        'attr'        => array(
                        'type' => 'password',
                        )))
//                ->add('password', RepeatedType::class, array(
//                        'type' => PasswordType::class,
//                        'invalid_message' => 'Les champs de mot de passe doivent correspondre.',
//                        'options' => array('attr' => array('class' => 'password-field')),
//                        'required' => true,
//                        'first_options'  => array('label' => 'Mot de passe'),
//                        'second_options' => array('label' => 'Répéter le mot de passe'),
//                        ))
                ->add('email',        EmailType::class) 
                ->add('tel',          TextType::class
                        , array(
                        'label'       =>'Phone',
                        'attr'        => array(
                        'placeholder' => 'xx xxx xxx',
                        )))
                ->add('governate',     EntityType::class
                        , array(
                        'class'        => 'BOUserBundle:Governate',
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
            'data_class' => 'BO\UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bo_userbundle_user';
    }


}
