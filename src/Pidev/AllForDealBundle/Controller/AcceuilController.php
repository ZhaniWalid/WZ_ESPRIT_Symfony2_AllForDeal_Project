<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pidev\AllForDealBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Usn\NewsletterBundle\Entity\Newsletter;
use Pidev\AllForDealBundle\Entity\Utilisateur;
use Pidev\AllForDealBundle\Entity\UtilisateurRepository;
/**
 * Description of AcceuilController
 *
 * @author Edzio
 */
class AcceuilController extends Controller{
   public function HelloAction()
    {
     //   $newsletter = new Newsletter();

       // $form = $this->createForm('newsletter', $newsletter, array("action" => $this->generateUrl("usn_newsletter_subscribe")));
     
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
        return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array());
    }
    
    
   
}
