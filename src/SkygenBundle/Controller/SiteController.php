<?php

namespace SkygenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('SkygenBundle:Site:index.html.twig');
    }
}
