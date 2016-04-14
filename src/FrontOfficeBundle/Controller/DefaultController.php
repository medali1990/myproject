<?php

namespace FrontOfficeBundle\Controller;


use FrontOfficeBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontOfficeBundle\Form\messageType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontOfficeBundle:Default:index.html.twig');
    }

    public function AddMessageAction(Request $request){
            // On cr�e un objet Advert
        $message = new Message();

        // On cr�e le FormBuilder gr�ce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $message);

        // On ajoute les champs de l'entit� que l'on veut � notre formulaire
        $formBuilder
          ->add('date',      'date')
          ->add('nom',     'text')
          ->add('message',   'textarea')
          ->add('mail',    'text') 
          ->add('save',      'submit')
        ;
        // Pour l'instant, pas de candidatures, cat�gories, etc., on les g�rera plus tard

        // � partir du formBuilder, on g�n�re le formulaire
        $form = $formBuilder->getForm();

    	return $this->render('FrontOfficeBundle:Default:index.html.twig',  array(
            'form' => $form->createView(),
               ));
    }


    public function viewMessageAction(){
    	$monRepository = $this->getDoctrine()
                              ->getManager()
       			      ->getRepository('FrontOfficeBundle:Message');
        
        //$criteres('nom' => 'a');
        //$tri('date' => 'desc');
        $var='a';
        
    	$Message = $monRepository->myFindAll();
       
        
    	return $this->render('CmsBundle:Default:dashboard.html.twig', array('Messages' => $Message ));
    }
    
}
