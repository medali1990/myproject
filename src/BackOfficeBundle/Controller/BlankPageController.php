<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlankPageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Default:blank-page.html.twig');
    }
}
