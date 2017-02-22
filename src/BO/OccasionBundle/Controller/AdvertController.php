<?php

namespace BO\OccasionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use BO\OccasionBundle\Entity\Advert;
use BO\OccasionBundle\Form\AdvertType;
//use BO\OccasionBundle\Entity\Customer;
use Symfony\Component\Form\Extension\Core\Type\Submit;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



//use OC\PlatformBundle\Entity\Advert;
//use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller
{
    public function indexAction($page)

  {

    // On ne sait pas combien de pages il y a

    // Mais on sait qu'une page doit être supérieure ou égale à 1

    if ($page < 1) {

      // On déclenche une exception NotFoundHttpException, cela va afficher

      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)

      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');

    }


    // Ici, on récupérera la liste des annonces, puis on la passera au template


    // Mais pour l'instant, on ne fait qu'appeler le template

    return $this->render('BOOccasionBundle:Advert:index.html.twig');

  }




 public function addAction(Request $request)
    {
            $advert = new Advert;
            $form = $this->createForm(AdvertType::class, $advert);
            if($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            
                $em = $this->getDoctrine()->getManager();
                $em->persist($advert);
                $em->flush(); 
                $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
        /********************************
                echo "<pre>";
                var_dump($request->request->All());
                var_dump($request->files->All());
                echo "</pre>";
                exit;
        /***********************************/
          return $this->redirectToRoute('bo_occasion_show', array('id' => $advert->getId()));
        }
        return $this->render('BOOccasionBundle:Advert:add.html.twig', array('form' => $form->createView(),
          ));
    }
    
    
    
  public function editAction($id, Request $request)

  {

    // Ici, on récupérera l'annonce correspondante à $id


    // Même mécanisme que pour l'ajout

    if ($request->isMethod('POST')) {

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');


      return $this->redirectToRoute('bo_occasion_show', array('id' => 5));

    }


    return $this->render('BOOccasionBundle:Advert:edit.html.twig');

  }


  public function deleteAction($id)

  {

    // Ici, on récupérera l'annonce correspondant à $id


    // Ici, on gérera la suppression de l'annonce en question


    return $this->render('BOOccasionBundle:Advert:delete.html.twig', array('id'=>$id));

  }
  
    public function howitworksAction()
  {
    return $this->render('BOOccasionBundle:Advert:howitworks.html.twig');
  }
  
    public function contactAction()
  {
    return $this->render('BOOccasionBundle:Advert:contact.html.twig');
  }
  
    public function termsAction()
  {
    return $this->render('BOOccasionBundle:Advert:terms.html.twig');
  }
  
    public function errorAction()
  {
    return $this->render('BOOccasionBundle:Advert:error.html.twig');
  }
  
    public function mobileappAction()
  {
    return $this->render('BOOccasionBundle:Advert:mobileapp.html.twig');
  }
  
    public function feedbackAction()
  {
    return $this->render('BOOccasionBundle:Advert:feedback.html.twig');
  }
  
    public function loginAction()
  {
    return $this->render('BOOccasionBundle:Advert:login.html.twig');
  }
    
    public function registerAction()
  {
    return $this->render('BOOccasionBundle:Advert:register.html.twig');
  }
    
    public function categoryAction($category)
  {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('BOOccasionBundle:Advert');
        $list_ad = $repository->getAdvertForCategory($category);
        return $this->render('BOOccasionBundle:Advert:category.html.twig',
                array('list_ad' => $list_ad) );
  }      

    public function showAction($id)
  {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('BOOccasionBundle:Advert')
        ;
        $repository->updateNbView($id);
        $one_ad = $repository->oneAdvert($id);
        if (!$one_ad) {
            throw $this->createNotFoundException(
                'Aucune annonce trouvée pour cet id : '.$id
        );}else{
            // Ici, on récupérera l'annonce correspondante à l'id $id
            return $this->render('BOOccasionBundle:Advert:show.html.twig', 
                    array('ad' => $one_ad));

        }
  }
  
     public function removeaddAction($id)
  {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('BOOccasionBundle:Advert')
        ;
        $repository->updateNbView($id);
        $one_ad = $repository->oneAdvert($id);
        if (!$one_ad) {
            throw $this->createNotFoundException(
                'Aucune annonce trouvée pour cet id : '.$id
        );}else{
            // Ici, on récupérera l'annonce correspondante à l'id $id
            return $this->render('BOOccasionBundle:Advert:show.html.twig', 
                    array('ad' => $one_ad));

        }
  }
  
 }
