<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TablesController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Default:tables.html.twig');
    }
}
