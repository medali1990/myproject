<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BootstrapgridController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Default:bootstrap-grid.html.twig');
    }
}
