<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pidev\AllForDealBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\Response;
use Pidev\AllForDealBundle\Entity\Utilisateur;
use Pidev\AllForDealBundle\Entity\UtilisateurRepository;
use Usn\NewsletterBundle\Entity\Newsletter;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler;

/**
 * Description of LoginUserController
 *
 * @author Edzio
 */
class LoginUserController extends Controller{
    
    static  $login;
    static  $pwd;
    public  $idU;
    public  $log;
    public  $l;
    
    
    
    public function logoutUserAction(){
        
         $em=$this->getDoctrine()->getManager();
         $userIsConnected=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findOneBy(array('connect'=>1));
       // aprés que la connexion serait bien établie    
          $userIsConnected->setConnect(Null); 
          $em->persist($userIsConnected);
          $em->flush(); 
        if($em){
                $this->get('session')->getFlashBag()->add('LogoutUser', 'logout user');        
        }  
            echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
        return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array());
    }
    
    public function VersCompteUserAfterConnectAction(){
        
          
         $em=$this->getDoctrine()->getManager();
         $userIsConnected=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findOneBy(array('connect'=>1));
         
         
        echo"<!Doctype html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$userIsConnected->getLoginUser()."<b></p> </div></div>";
       return $this->redirectToRoute('pidev_all_for_deal_AccesCompteUserTest');
   //  return $this->redirect($this->generateUrl('pidev_all_for_deal_AccesCompteUser'));        

    }
    
    public function HomeUserConnectedAction(){
         
         $em=$this->getDoctrine()->getManager();
         $userIsConnected=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findOneBy(array('connect'=>1));
         
         
        echo"<!Doctype html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$userIsConnected->getLoginUser()."<b></p> </div></div>";
      return $this->render('PidevAllForDealBundle:CompteUser:HomeOfUserConnected.html.twig',array());    
        
    }
    
    public function ConnectRechercheAction(){
         
        $request=$this->get('request_stack')->getCurrentRequest();
        if($request->getMethod()=='POST')
        {
            $login=$request->get('username_id'); 
            $pwd=$request->get('password_id');
            


     //       $storage = new NativeSessionStorage(array(), new NativeFileSessionHandler());

            // réglage du session
       /*     $session = new Session($storage);
            $session->start();*/
            // set and get session attributes
        /*   $session->set('name', $login);
           $session->get('name'); */ 
            // set flash messages
     //      $session->getFlashBag()->add('notice', 'Profile updated');
              // retrieve messages
           /* foreach ($session->getFlashBag()->get('notice', array()) as $message) {
             echo '<!DOCTYPE html><div class="flash-notice">'.$message.'</div>';
            }  */
            
          //  $tokens = $session->get('tokens');
          //  $tokens['c'] = 'a6c1e0b6';
          //  $session->set('tokens', $tokens);
			
         //   $log=new Utilisateur();
          //  $l=$log->setLoginUser($login); 
          //  $user =new Utilisateur();
          //  $user->getIdUser();
         //   $id=$request->get('id_');
            $em=$this->getDoctrine()->getManager();
            $User=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findBy(array('loginUser'=>$login,'pwdUser'=>$pwd));
            $userIsBanned=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findBy(array('loginUser'=>$login,'pwdUser'=>$pwd,'ban'=>1));
            $userIsNotBanned=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findOneBy(array('loginUser'=>$login,'pwdUser'=>$pwd,'ban'=>Null,'connect'=>Null));
          //  $userIsConnected=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findOneByConnect(Null);
            
          
            
        if($User && $userIsNotBanned){
       
   

           // $pdo = new \PDO("mysql:host='localhost';dbname='allfordeal_symfony'", 'root', ''); 
            $storage = new NativeSessionStorage(array(), new NativeFileSessionHandler());

            // réglage du session
            $session = new Session($storage);
            $session->start();
            // set and get session attributes
           $session->set('name', $login);
           $session->get('name');
            // set flash messages
           $session->getFlashBag()->add('notice', 'Profile updated');
            
            $tokens = $session->get('tokens');
            $tokens['c'] = 'a6c1e0b6';
            $session->set('tokens', $tokens);    
            
            
        // aprés que la connexion serait bien établie    
          $userIsNotBanned->setConnect(1);
          $em->persist($userIsNotBanned);
          $em->flush();

       $this->get('session')->getFlashBag()->add('LoginUserTrue', 'Connection avec succees'); 
      //  echo"<!DOCTYPE html> <script> alert('Connexion a été établie avec succés , Bienvenu chez All For Deal dans Espace Client'); </script>";  
       // echo"<script> bootbox.alert('Connexion a été établie avec succés , Bienvenu chez All For Deal dans Espace Client'); </script>";
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$login."<b></p> </div></div>";
       return $this->redirect($this->generateUrl('pidev_all_for_deal_homeUserConnected'));        

         // return $this->render('PidevAllForDealBundle:CompteUser:CompteUser.html.twig',array());  
       

        // echo"alert('Connexion a été établie avec succés , Bienvenu chez All For Deal dans Espace Client Mr/Mme : '.$login);";
           //     echo "<h1 style='color:green'> Pseudo Disponible : You Can Use this Pseudo to Login </h1>";
       // $this->loginU=$login;
       // $this->pwdU=$pwd;
       // $idU=$id;  
        }else if($User && $userIsBanned){
            
            $this->get('session')->getFlashBag()->add('LoginUserBlocked', 'Connection blocked');
             //echo"<!DOCTYPE html> <p style='color:red'> Erreur de Connexion  Vous etes bloqués par l'Admininstrateur Vous ne pouvez plus connecter </p>";
            // echo"<!DOCTYPE html> <script> alert('Erreur de Connexion  Vous etes bloqués par l'Admininstrateur Vous ne pouvez plus connecter'); </script>";
             echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
         
        //    echo "<h1 style='color:red'> Pseudo Existe Déja : This Pseudo is used by Some One else ,and registred into the db </h1>";
         return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array()); 
         
        }else{
            
             $this->get('session')->getFlashBag()->add('LoginUserFailed', 'Connection Failed');    
         // print"<h6 style='color:red'>Erreur de Connexion , Veillez Réssayer </h6>";  
        // echo"<!DOCTYPE html> <script> alert('Erreur de Connexion , Veillez Vérifier les champs et Réssayer'); </script>";
         echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
         
        //    echo "<h1 style='color:red'> Pseudo Existe Déja : This Pseudo is used by Some One else ,and registred into the db </h1>";
         return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array()); 
         
        }
         
         
         //  return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array('users'=>$user)); 
        }
       // return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array()); 
        
    } 
    
    public function afterLoginAction(){
     //   $newsletter = new Newsletter();

       // $form = $this->createForm('newsletter', $newsletter, array("action" => $this->generateUrl("usn_newsletter_subscribe")));
      echo"<!DOCTYPE html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
      return $this->render('PidevAllForDealBundle:CompteUser:CompteUser.html.twig',array());   
    }
    
    public function VersCompteUserAction($login,$pwd){
       //   $request=$this->get('request_stack')->getCurrentRequest();
         
          //  $login=$request->get('username_id'); 
          //  $pwd=$request->get('password_id');
         //   $log=new Utilisateur();
          //  $l=$log->setLoginUser($login); 
          //  $user =new Utilisateur();
          //  $user->getIdUser();
         //   $id=$request->get('id_');
        
            $em=$this->getDoctrine()->getManager();
            $User=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findBy(array('loginUser'=>$login,'pwdUser'=>$pwd,'connect'=>1));
         /*   $images = array();
             foreach ($User as $key => $entity) {
              $images[$key] = base64_encode(stream_get_contents($entity->getPhotoUser()));
              }*/
     //   $photo=$em->getPhotoUser();
      /* $response = new StreamedResponse(function () use ($User) {
          echo stream_get_contents($User);
        });
             $response->headers->set('Content-Type', 'image/jpeg');*/
          //return $response;
            
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$login."<b></p> </div></div>";
        return $this->render('PidevAllForDealBundle:CompteUser:AccederCompteUser.html.twig',array('ThisUser'=>$User));   

    }  
    
      public function VersCompteUser2Action(){
       //   $request=$this->get('request_stack')->getCurrentRequest();
         
          //  $login=$request->get('username_id'); 
          //  $pwd=$request->get('password_id');
         //   $log=new Utilisateur();
          //  $l=$log->setLoginUser($login); 
          //  $user =new Utilisateur();
          //  $user->getIdUser();
         //   $id=$request->get('id_');
        
            $em=$this->getDoctrine()->getManager();
            $User=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findOneBy(array('connect'=>1));
            $login=$User->getLoginUser();
            $pwd=$User->getPwdUser();
            $TrueUser=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findBy(array('loginUser'=>$login,'pwdUser'=>$pwd,'connect'=>1));
         /*   $images = array();
             foreach ($User as $key => $entity) {
              $images[$key] = base64_encode(stream_get_contents($entity->getPhotoUser()));
              }*/
     //   $photo=$em->getPhotoUser();
      /* $response = new StreamedResponse(function () use ($User) {
          echo stream_get_contents($User);
        });
             $response->headers->set('Content-Type', 'image/jpeg');*/
          //return $response;
            
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$login."<b></p> </div></div>";
        return $this->render('PidevAllForDealBundle:CompteUser:AccederCompteUser.html.twig',array('ThisUser'=>$TrueUser));   

    } 
    
    public function UserUpdateCompteAction($id){
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
            $sexe=$request->get('choixSexe');
            $em=$this->getDoctrine()->getManager();
            $user=$em->getRepository('PidevAllForDealBundle:Utilisateur')->find($id);
            $user->setNomUser($nom);
            $user->setPrenomUser($prnm);
            $user->setAdresseUser($address);
            $user->setEmailUser($email);
            $user->setTelUser($mobile);
            $user->setStatutUser($status);
            $user->setLoginUser($login);
            $user->setPwdUser($pwd);
            $user->setSexeUser($sexe);
            
          //  $em->persist($user);// c'est la meme que "insert into ...."
            $em->flush(); // pour faire la mise à jour dans la base de donnés
            if($em){
                
                // aprés mdofication et redirection vers la page d'acceuil du logout
                
                $user->setConnect(Null);
           $this->get('session')->getFlashBag()->add('UpdateSucceed', 'update succeed');        
             //   echo"<!DOCTYPE html><script> alert('Modification du votre compte a été éffectué avec succés,vous devez reconnectez pour que la modification prends en charge'); </script>"; 
                echo"<div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
        // return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array()); 
            return $this->redirect($this->generateUrl('pidev_all_for_deal_logoutUser'));        

             //   echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
             //   echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$login."<b></p> </div></div>";         
            //       return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
           

 
           }else{
             
           $this->get('session')->getFlashBag()->add('UpdateFailed', 'update failed');             
            //    echo"<!DOCTYPE html><script> alert('Modification du votre compte a été échoué'); </script>";          
              //  echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
              //  echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$login."<b></p> </div></div>";         
         //                return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
                         echo"<div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";

         return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array()); 

              }
         return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array()); 
    //  return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
       // return new Response('Created User id '.$user->getIdUser());
       
    }
         // return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
         return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array()); 

      // return $this->render('PidevAllForDealBundle:CompteUser:CompteUser.html.twig',array('user'=>$user));  
  }
  
   /* public function RechercheQBAction(){
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository("EspritParcBundle:Modele")->RechercheQB();
        return $this->render('EspritParcBundle:Modele:resultat.html.twig',array('modeles'=>$modele));
    }*/
  
  public function isItBlockedUser($login,$pwd){
      
       $em=$this->getDoctrine()->getManager();
       $User=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findBy(array('loginUser'=>$login,'pwdUser'=>$pwd,'ban'=>1));
       $isItBanned=$User->getBan();
       if($isItBanned==1){
           $blocked=true;
       }else{
           $blocked=false;
       }
       return $blocked;       
  }  
  
 
  
  
}