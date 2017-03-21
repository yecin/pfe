<?php

namespace BO\OccasionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use BO\OccasionBundle\Entity\Advert;

use BO\OccasionBundle\Entity\Message;
use BO\OccasionBundle\Form\AdvertType;
use BO\OccasionBundle\Form\AdvertEditType;
use BO\OccasionBundle\Form\AdvertOnlyType;
//use BO\OccasionBundle\Entity\Customer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\Submit;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



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
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('BOOccasionBundle:Advert');
        $list_ad = $repository->getForAdvert();
        return $this->render('BOOccasionBundle:Advert:index.html.twig',
                array('list_ad' => $list_ad) );

  }




 public function addAction(Request $request)
   {
            $advert = new Advert;
            if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
            {    
                $advert->setUser ($this->getUser());
                $form = $this->createForm(new AdvertOnlyType($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'),$this->getUser()->getId()), $advert);
                if ($advert->getUser()->getTel()){
                    $form->add('showphone',   CheckboxType::class
                        , array(
                        'required' => false,
                        'label'=>'oui',
                        ));
                }
            }
            else
            {
            //if authentified 
                $form = $this->createForm(new AdvertType($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')), $advert);
            }
        /********************************/
//                echo "<pre>";
//                var_dump($request->request->All());
//                var_dump($request->files->All());
//                echo "</pre>";
//                exit;
                //if($_SERVER["REQUEST_METHOD"]  === 'POST'){echo($_POST['content']);}
        /***********************************/            
            //$form = $this->createForm(AdvertType::class, $advert);
            if($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        /*##############################################*/
            // $file stores the uploaded image file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $advert->getAdvertimage();
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            // Move the file from temp directory to the image directory (added in parameters.yml)
            $file->move(
                $this->getParameter('images_directory'),
                $fileName
            );
            // Update the 'annonceimage' property to store the image file name
            // instead of its contents
            $advert->setAdvertimage($fileName);
        /*###############################################*/  
            /**************si authentifier*******************/
                $em = $this->getDoctrine()->getManager();
                if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
                    echo $this->get('security.context')->getToken()->getUser();;
                }
                $em->persist($advert);
                $em->flush(); 
                $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
        
          return $this->redirectToRoute('bo_occasion_show', array('id' => $advert->getId()));
        }
        return $this->render('BOOccasionBundle:Advert:add.html.twig', array('form' => $form->createView(),
          ));
    }
    
    
    
    
 /**
 * @Security("has_role('ROLE_USER') or has_role('ROLE_ADMIN')")
 */    
  public function editAction($id, Request $request)

  {
/**************************************************************/
    $em = $this->getDoctrine()->getManager();
    // On récupère l'annonce $id
    $advert = $em->getRepository('BOOccasionBundle:Advert')->find($id);
    
    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }
    /*+++++++++++++++++++++++++++++++++++*/
//    /*à rempalcer*/
//    $form = $this->createForm(new AdvertEditType(), $advert); 
//    if ($form->handleRequest($request)->isValid()) {
//      // Inutile de persister ici, Doctrine connait déjà notre annonce
//      /******************************************************/
//      //$em = $this->getDoctrine()->getManager();
//      $em->persist($advert);
//      /****************************************************/
//      $em->flush();
//      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');
//      return $this->redirect($this->generateUrl('bo_occasion_show', array('id' => $advert->getId())));
//    }
    /*++++++++++++++++++++++++++++++++++++++*/
    $form = $this->createForm(new AdvertEditType(), $advert);
    $request = $this->getRequest();
    if ($request->isMethod('Post')) {
    $form->handleRequest($request);
    if ($form->isValid()) {
    $advert = $form->getData();
    $em->persist($advert);
    $em->flush();
    $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');
    return $this->redirect($this->generateUrl('bo_occasion_show', array('id' => $advert->getId())));
    }
    }
    return $this->render('BOOccasionBundle:Advert:edit.html.twig', array(
      'form'   => $form->createView(),
      'advert' => $advert // Je passe également l'annonce à la vue si jamais elle veut l'afficher
    ));     
/*****************************************************************/      
//    /* Ici, on récupérera l'annonce correspondante à $id*/
//        $em = $this->getDoctrine()->getEntityManager();
//        $entity = $em->getRepository('BOOccasionBundle:Advert')->find($id);
//        if (!$entity) {
//          throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
//        }
//        $editForm = $this->createForm(new AdvertEditType(), $entity);
////        $deleteForm = $this->createDeleteForm($token);
//        return $this->render('BOOccasionBundle:Advert:edit.html.twig', array(
//          'entity'      => $entity,
//          'edit_form'   => $editForm->createView(),
//          //'delete_form' => $deleteForm->createView(),
//        ));

  }

 /**
 * @Security("has_role('ROLE_USER') or has_role('ROLE_ADMIN')")
 */
  public function deleteAction($id, Request $request)

  {
                // On récupère l'EntityManager
            $em = $this->getDoctrine()->getManager();
            // On récupère l'entité correspondant à l'id $id
            $ad = $em->getRepository('BOOccasionBundle:Advert')->find($id);
            // Si l'annonce n'existe pas, on affiche une erreur 404
            if ($ad == null) {
              throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
            }
            if ($request->isMethod('POST')) {
              // Si la requête est en POST, on deletea l'article
                $em->remove($ad);
                $em->flush();
              $request->getSession()->getFlashBag()->add('info', 'Annonce bien supprimée.');
              // Puis on redirige vers l'accueil
              return $this->redirect($this->generateUrl('bo_occasion_home'));
//               une redirection vers la dernière page visité
//              return $this->redirect($form->get('redirect_url')->getData());
            }
            // Si la requête est en GET, on affiche une page de confirmation avant de delete
            return $this->render('BOOccasionBundle:Advert:delete.html.twig', array(
              'ad' => $ad
            ));

  }
  
    public function contactAction()
  {
    return $this->render('BOOccasionBundle:Advert:contact.html.twig');
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

    public function mylistAction($id)
  {
        //$nbPerPage = 3; /*pagination*/
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('BOOccasionBundle:Advert');
        $list_ad = $repository->getMylistAdvert($id);
        return $this->render('BOOccasionBundle:Advert:mylist.html.twig',
                array('list_ad' => $list_ad) );
  }

public function addmsgAction(Request $request)
    {
            $msg = new Message;
            //if authentified 
            $form = $this->createForm(new MessageType($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')), $msg);
            //$form = $this->createForm(MessageType::class, $msg);
            if($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {        
                $em = $this->getDoctrine()->getManager();
                $em->persist($msg);
                $em->flush(); 
                $request->getSession()->getFlashBag()->add('notice', 'Message envoyé.');
        /********************************
                echo "<pre>";
                var_dump($request->request->All());
                var_dump($request->files->All());
                echo "</pre>";
                exit;
        /***********************************/
          return $this->redirectToRoute('bo_occasion_listmsg', array('id' => $msg->getIdExp()));
        }
        return $this->render('BOOccasionBundle:Advert:addmsg.html.twig', array('form' => $form->createView(),
          ));
    }
  
 }
