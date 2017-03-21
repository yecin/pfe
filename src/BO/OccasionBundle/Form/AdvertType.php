<?php

namespace BO\OccasionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use BO\UserBundle\Form\UserType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
//*****************************************************************
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
//*******************************************************************

class AdvertType extends AbstractType
{
//    // ****pour controler la ajout customer****
//    private $isGranted;
//    public function __construct($isGranted)
//    {
//        $this->isGranted = $isGranted;
//    }
//    //****************************************
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('title',       TextType::class
                        , array(
                        'label'=>'Titre',
                        'required'=> false,    
                        'attr' => array(
                        'placeholder' => 'Titre',
                        )))
                ->add('content',     TextareaType::class                       
                        , array(
                        'label'=>'Description',
                        'required'=> false,
                        'attr' => array(
                        'placeholder' => 'Description...',
                        )))
                ->add('price',       NumberType::class
                        , array(
                        'scale' => 3,
                        'label'=>'Prix',
                        ))
                ->add('brand',       TextType::class
                         , array(
                        'label'=>'Marque'))
                ->add('showphone',   CheckboxType::class
                        , array(
                        'required' => false,
                        'label'=>'oui',
                        ))
                ->add('published',  CheckboxType::class
                        , array(
                            'required' => false,
                            'label'=>'oui',
                            ))
                ->add('category',    EntityType::class, array(
                            'class'        => 'BOOccasionBundle:Category',
                            'label'        => 'Catégorie',
                            'choice_label' => 'longname',
                            'multiple'     => false,
                            'expanded'     => false,
                      ))
                ->add('user',        UserType::class)
                ->add('state',       TextType::class                       
                        , array(
                        'label'=>'Etat',
                        'attr' => array(
                        'placeholder' => 'Etat de débarrs...',
                        )))
                ->add('submit',        SubmitType::class
                        , array(
                        'label'=>'Publier mon annonce'
                        )                        
                    )
                ->add('advertimage', FileType::class
                        , array('label' => "Ajoutez vos photos"
                            ))
//                ->add('redirect_url', 'hidden', array(
//                        'mapped' => false,
//                        'data'=>$this->getRequest()->server->get('HTTP_REFERER'),
//                    ))
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
