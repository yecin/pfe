<?php

namespace BO\OccasionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

//*****************************************************************
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
//*******************************************************************

class AdvertType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('title',       TextType::class
                        , array(
                        'label'=>'Titre',
                        'attr' => array(
                        'placeholder' => 'Titre',
                        )))
                ->add('content',     TextareaType::class                       
                        , array(
                        'label'=>'Description',
                        'attr' => array(
                        'placeholder' => 'Description...',
                        )))
                ->add('price',       IntegerType::class
                        , array(
                        'label'=>'Prix',
                        ))
                ->add('brand',       TextType::class
                         , array(
                        'label'=>'Marque'))
                ->add('showphone',   CheckboxType::class
                        , array(
                        'required' => false,
                        'label'=>'Afficher le numéro',
                        ))
                /*->add('picture',     PictureType::class
                        , array(
                        'data_class' => null,
                        'label'=>'Photos',
                        ))*/
                ->add('published',   CheckboxType::class
                        , array(
                            'required' => false,
                            'label'=>'Publier',
                            ))
                ->add('category',    EntityType::class, array(
                            'class'        => 'BOOccasionBundle:Category',
                            'choice_label' => 'longname',
                            'multiple'     => false,
                            'expanded'     => false,
                      ))
                 
                ->add('customer',    CustomerType::class)
                ->add('state',     TextType::class                       
                        , array(
                        'label'=>'State',
                        'attr' => array(
                        'placeholder' => 'Etat...',
                        )))
                ->add('save',        SubmitType::class
                        , array(
                        'label'=>'Publier mon annonce'/*/,
                        'attr' => array('class' => 'clearfix'),*/
                        )                        
                    )
                ->add('advertimage', FileType::class, array('label' => "Ajouter vos photos"))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BO\OccasionBundle\Entity\Advert'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bo_occasionbundle_advert';
    }
    
    
    public function getName()
    {
        return 'advert';
    }

}
