<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormsController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Default:forms.html.twig');
    }
}
