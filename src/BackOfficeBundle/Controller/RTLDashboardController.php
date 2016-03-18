<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RTLDashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Default:index-rtl.html.twig');
    }
}
