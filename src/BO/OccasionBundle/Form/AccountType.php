<?php

namespace BO\OccasionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class AccountType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('email',           TextType::class
                        , array(
                        'label'=>'E-mail',
                        'attr' => array(
                        'placeholder' => 'xxx@aaa.ccc',
                        )))
                //->add('password',        PasswordType::class)//'password'
                //->add('lastpassword',    PasswordType::class)//'password'
                //->add('customer',        EntityType::class)
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BO\OccasionBundle\Entity\Account'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bo_occasionbundle_account';
    }
    
    
    public function getName()
    {
        return 'account';
    }

}
