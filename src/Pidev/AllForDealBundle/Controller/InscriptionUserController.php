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
use Pidev\AllForDealBundle\Form\UtilisateurType;
use Pidev\AllForDealBundle\Entity\UserMailer;
use Symfony\Component\HttpFoundation\Request;
use Swift_Message;
 
/**
 * Description of InscriptionUserController
 *
 * @author Edzio
 */
class InscriptionUserController extends Controller{
    
    public function InscriptionAction(){
        $request=$this->getRequest();
        if ($request->getMethod()=='POST'){
            $nom=$request->get('nom_id');
            $prnm=$request->get('prnm_id');
            $address=$request->get('address_id');
            $email=$request->get('email_id');
            $mobile=$request->get('mobile_number');
            $status=$request->get('statut');
            $login=$request->get('login_id');
            $pwd=$request->get('password');
            $enc_pwd=  \md5($pwd);
            $sexe=$request->get('choixSexe');
            $foto=$request->get('foto_id');
            $user=new Utilisateur();
            $user->setNomUser($nom);
            $user->setPrenomUser($prnm);
            $user->setAdresseUser($address);
            $user->setEmailUser($email);
            $user->setTelUser($mobile);
            $user->setStatutUser($status);
            $user->setLoginUser($login);
            $user->setPwdUser($pwd);   
            $user->setEnc_pwd($enc_pwd);
            $user->setSexeUser($sexe);
            $user->setPhotoUser($foto);
            // photo profile
           /* $filename  =  $this->getRequest()->files->get('foto_id')->getClientOriginalName();
            $directory = $this->container->getParameter('kernel.root_dir') . '/../web/data_images';
            $this->getRequest()->files->get('foto_id')->move($directory, $filename);
             
            $user->setPhotoVarchar($filename);*/
            
            
            $confirmcode= \rand();
            $user->setConfirm_code($confirmcode);

            // $stream = fopen($user->getFile(),'foto_id');
            //$user->setPhotoUser(stream_get_contents($stream));
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);// c'est la meme que "insert into ...."
            $em->flush(); // pour faire la mise à jour dans la base de donnés
          //  echo "<!DOCTYPE html> <script> alert('Inscription a été éffectué avec succés'); </script>";
     if($em){
                $this->get('session')->getFlashBag()->add('InscriSucces', 'Inscription avec succees');
                
                $this->activateAccountAction($login,$confirmcode);

           /*     $bodyMsg="Appuyez sur ce lien  pour activer votre compte :   http://localhost/Esprit_3A5_ProjetPiDev/AllForDeal_Symfony2/emailconfirmController.php?loginUser=$login&codeUser=$confirmcode";
                // envoie d'email de confirmation aprés inscription
                $to="walid.zhani@esprit.tn"; 
                $sender="validos11@gmail.com";
                $subject="Do Not Reply";
                $mail=new UserMailer();
                  $message = Swift_Message::newInstance()
                    ->setSubject($subject)
                    ->setFrom($sender) 
                    ->setTo($to)
                    ->setBody($bodyMsg);
                 $this->get('mailer')->send($message);*/

                         
                
      }else{
                $request->get('session')->getFlashBag()->add('InscriFailed', 'Inscription echoue');
            }
            return $this->redirectToRoute("pidev_all_for_deal_home");
        }
       // return new Response('Created User id '.$user->getIdUser());
        
         return $this->render("PidevAllForDealBundle:Acceuil:Acceuil.html.twig",array());     
    }
  
    
    // activation account
    
    public function activateAccountAction($loginUser,$confirm_code) {

     // $request=$this->getRequest(); 
              $request=$this->get('request_stack')->getCurrentRequest();

      if($request->getMethod()=='GET'){
          
      
  
                $em = $this->getDoctrine()->getManager();
  $activation = $em->getRepository('PidevAllForDealBundle:Utilisateur')->findOneBy(array('loginUser' => $loginUser));
       
      
                $to="walid.zhani@esprit.tn"; 
                $sender="validos11@gmail.com";
                $subject="Do Not Reply";
      
      $message = Swift_Message::newInstance()
          ->setSubject($subject)
          ->setFrom($sender)
          ->setTo($to)
          ->setBody(
              $this->renderView(
                  'PidevAllForDealBundle:Default:confirmation_mail.txt.twig',
                  array('loginUser' => $loginUser,'confirm_code'=>$confirm_code)
              )
          );
      
      if ($this->get('templating')->exists('PidevAllForDealBundle:Default:confirmation_mail.html.twig')){   
          
        $message->addPart(
          $this->renderView(
            'PidevAllForDealBundle:Default:confirmation_mail.html.twig',
            array('loginUser' => $loginUser,'confirm_code'=>$confirm_code)
          ),"text/html");
        
      }

      return $this->get('mailer')->send($message);
      
      if(!$activation) throw $this->createNotFoundException($this->get('translator')->trans("page-not-found"));
    }
      return $this->render('PidevAllForDealBundle:Default:confirmation_mail.html.twig', array('loginUser' => $loginUser,'confirm_code'=>$confirm_code));
 }

    public function activateAccountCompleteAction($loginUser,$confirm_code) {

      $em = $this->getDoctrine()->getManager();
      
      $activation = $em
        ->getRepository('PidevAllForDealBundle:Utilisateur')
        ->findOneBy(array('loginUser' => $loginUser,'confirm_code'=>$confirm_code));

      if(!$activation) throw $this->createNotFoundException($this->get('translator')->trans('page-not-found'));
 
 
      
       $activation->setConfirm_code(0);
       $activation->setConfirmed(1);
       $em->persist($activation);
       $em->flush();

      return $this->render('PidevAllForDealBundle:Default:validateAccount_complete.html.twig');

    }
}
