<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pidev\AllForDealBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pidev\AllForDealBundle\Entity\Utilisateur;
use Pidev\AllForDealBundle\Entity\UtilisateurRepository;
use Pidev\AllForDealBundle\Entity\UserMailer;
use Swift_Message;
/**
 * Description of MailerUserController
 *
 * @author Edzio
 */
class MailerUserController extends Controller{
    
     // Mailer User
  
  public function UserContactUsAction(){
      
      
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
        return $this->render('PidevAllForDealBundle:CompteUser:UserContactUs.html.twig', array());
  }
  
  public function ConnectedUserContactUsAction(){
      
        $em=$this->getDoctrine()->getManager();
        $userIsConnected=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findOneBy(array('connect'=>1));
        $login=$userIsConnected->getLoginUser();
        $pwd=$userIsConnected->getPwdUser();
        $TrueUser=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findBy(array('loginUser'=>$login,'pwdUser'=>$pwd,'connect'=>1)); 
         
        echo"<!Doctype html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$userIsConnected->getLoginUser()."<b></p> </div></div>";
    return $this->render('PidevAllForDealBundle:CompteUser:ConnectedUserContactUs.html.twig', array('ThisUser'=>$TrueUser));

     }
  
  public function contactAction(){
       $request=$this->getRequest();
        if ($request->getMethod()=='POST'){
            $fullName=$request->get('email_name');
            $emailSender=$request->get('email_mail');
            $subject=$request->get('email_subject');
            $body=$request->get('email_body');
            $to="walid.zhani@esprit.tn"; 
            
            $mail=new UserMailer();
            
            $sub=$mail->getSubjectSender($mail->setSubjectSender($subject));
            $sender=$mail->getEmailSender($mail->setEmailSender($emailSender));
            $Body=$mail->getBodyMail("\n Nom et Prénom : ".$mail->setFullNameSender($fullName)."\n Sujet :".$mail->setSubjectSender($subject)."\n Contenu :".$mail->setBodyMail($body));

            $message = Swift_Message::newInstance()
                    ->setSubject($sub)
                    ->setFrom($sender) 
                    ->setTo($to)
                    ->setBody($Body);
            $this->get('mailer')->send($message);
           // echo "<!DOCTYPE html> <h3 style='color:green'> Email envoyé avec succés </h3>";
         //   echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
            echo "<!DOCTYPE html><script> alert('Email envoyé avec succés'); </script>";
            return $this->redirectToRoute('pidev_all_for_deal_ConnectedUserContactUs');
          // return $this->render('PidevAllForDealBundle:CompteUser:UserContactUs.html.twig',array());
        }
        else{
           // echo "<!DOCTYPE html> <h3 style='color:red'> Enoie d'Email a été échoué  </h3>";
            echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
            echo "<script> alert('Enoie d'Email a été échoué'); </script>";
        }
           return $this->redirect($this->generateUrl('pidev_all_for_deal_ConnectedUserContactUs'));
    }
    
    public function contactUsUserNonConnectedAction(){
       $request=$this->getRequest();
        if ($request->getMethod()=='POST'){
            $fullName=$request->get('email_name');
            $emailSender=$request->get('email_mail');
            $subject=$request->get('email_subject');
            $body=$request->get('email_body');
            $to="walid.zhani@esprit.tn"; 
            
            $mail=new UserMailer();
            
            $sub=$mail->getSubjectSender($mail->setSubjectSender($subject));
            $sender=$mail->getEmailSender($mail->setEmailSender($emailSender));
            $Body=$mail->getBodyMail("\n Nom et Prénom : ".$mail->setFullNameSender($fullName)."\n Sujet :".$mail->setSubjectSender($subject)."\n Contenu :".$mail->setBodyMail($body));

            $message = Swift_Message::newInstance()
                    ->setSubject($sub)
                    ->setFrom($sender) 
                    ->setTo($to)
                    ->setBody($Body);
            $this->get('mailer')->send($message);
           // echo "<!DOCTYPE html> <h3 style='color:green'> Email envoyé avec succés </h3>";
         //   echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
          //  echo "<script> alert('Email envoyé avec succés'); </script>";
          //  echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
             echo "<!DOCTYPE html><script> alert('Envoie d'Email a été éffectué avec succés'); </script>";
            return $this->redirectToRoute('pidev_all_for_deal_UserContactUs');
          // return $this->render('PidevAllForDealBundle:CompteUser:UserContactUs.html.twig',array());
        }
        else{
           // echo "<!DOCTYPE html> <h3 style='color:red'> Enoie d'Email a été échoué  </h3>";
            echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
            echo "<script> alert('Envoie d'Email a été échoué'); </script>";
        }
           return $this->redirect($this->generateUrl('pidev_all_for_deal_UserContactUs'));
    }
    
    public function newsLetterUserAction(){
        
    }
}

