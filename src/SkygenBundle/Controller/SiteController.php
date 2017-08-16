<?php

namespace SkygenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;


class SiteController extends Controller
{
    public function indexAction()
    {
        dump($this->getDoctrine()->getManager()->getRepository('SkygenBundle:Users')->findAll());
        return $this->render('SkygenBundle:Site:index.html.twig');
    }

    public function loginAction(Request $request)
    {
        if ($request->getMethod() == "POST") {

        } else {
            $this->addFlash('danger', 'Accès interdit !');
            return $this->redirectToRoute('skygen_homepage');
        }
    }

    public function testeAction()
    {
        return new Response('Teste');
    }
}
