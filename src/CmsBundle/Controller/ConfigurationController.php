<?php

namespace CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConfigurationController extends Controller
{
    public function indexAction()
    {
        return $this->render('CmsBundle:Default:configuration.html.twig');
    }
}