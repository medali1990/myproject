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
            // On crée un objet Advert
        $message = new Message();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $message);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
          ->add('date',      'date')
          ->add('nom',     'text')
          ->add('message',   'textarea')
          ->add('mail',    'text') 
          ->add('save',      'submit')
        ;
        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

        // À partir du formBuilder, on génère le formulaire
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
