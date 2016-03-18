<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BootstrapelementsController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Default:bootstrap-elements.html.twig');
    }
}
