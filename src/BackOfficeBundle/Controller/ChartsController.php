<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChartsController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Default:charts.html.twig');
    }
}
