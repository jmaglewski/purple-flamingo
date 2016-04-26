<?php

namespace LocalizeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('LocalizeBundle:Default:index.html.twig', array(
            'google_api_browser_key' => $this->container->getParameter('google_api_browser_key'),
            'place_radius' => $this->container->getParameter('place_radius'),
            'place_type' => $this->container->getParameter('place_type'),
        ));
    }
}
