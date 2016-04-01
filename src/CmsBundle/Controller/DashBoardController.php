<?php

namespace CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashBoardController extends Controller
{
    public function indexAction()
    {
        return $this->render('CmsBundle:Default:dashboard.html.twig');
    }
}