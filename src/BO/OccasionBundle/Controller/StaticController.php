<?php

namespace BO\OccasionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class StaticController extends Controller
{

  
    public function howitworksAction()
  {
    return $this->render('BOOccasionBundle:Static:howitworks.html.twig');
  }
  
    public function termsAction()
  {
    return $this->render('BOOccasionBundle:Static:terms.html.twig');
  }
  
    public function errorAction()
  {
    return $this->render('BOOccasionBundle:Static:error.html.twig');
  }
  
    public function mobileappAction()
  {
    return $this->render('BOOccasionBundle:Static:mobileapp.html.twig');
  }
  
    public function privacyAction()
  {
    return $this->render('BOOccasionBundle:Static:privacy.html.twig');
  }
  
    public function feedbackAction()
  {
    return $this->render('BOOccasionBundle:Static:feedback.html.twig');
  }

  
 }
