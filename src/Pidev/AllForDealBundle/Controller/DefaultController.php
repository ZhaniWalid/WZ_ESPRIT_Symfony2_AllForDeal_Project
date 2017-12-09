<?php

namespace Pidev\AllForDealBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PidevAllForDealBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function HelloAction()
    {
        return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig', array());
    }
}
