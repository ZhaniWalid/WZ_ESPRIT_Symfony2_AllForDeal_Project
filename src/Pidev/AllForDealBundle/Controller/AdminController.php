<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pidev\AllForDealBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pidev\AllForDealBundle\Entity\Admin;
use Pidev\AllForDealBundle\Entity\AdminRepository;
use Pidev\AllForDealBundle\Form\UtilisateurType;
use Pidev\AllForDealBundle\Form\Utilisateur;
/**
 * Description of AdminController
 *
 * @author Edzio
 */
class AdminController extends Controller{
    //put your code here
    
    
    public function AcceuilEspaceAdminAction(){
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
        return $this->render('PidevAllForDealBundle:Admin:AdminSpace.html.twig',array());   
    }
    
    public function AcceuiLoginAdminAction(){
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
        return $this->render('PidevAllForDealBundle:Admin:LoginAdmin.html.twig', array());
    }
    
    public function ApresLoginEspaceAmdinAction()
    {
        $request=$this->get('request_stack')->getCurrentRequest();
        if($request->getMethod()=='POST')
        {
            $login=$request->get('username_id'); 
            $pwd=$request->get('password_id');
           // $admin =new Admin();
         //   $id=$request->get('id_');
            $em=$this->getDoctrine()->getManager();
            $admin=$em->getRepository('PidevAllForDealBundle:Admin')->findBy(array('loginAdmin'=>$login,'pwdAdmin'=>$pwd));
       
        if($admin){
        
              
        echo"<!DOCTYPE html> <script> alert('Connexion a été établie avec succés , Bienvenu chez All For Deal dans Espace Adminstrative'); </script>";  
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>".$login."<b></p> </div></div>";

        // echo"alert('Connexion a été établie avec succés , Bienvenu chez All For Deal dans Espace Client Mr/Mme : '.$login);";
           //     echo "<h1 style='color:green'> Pseudo Disponible : You Can Use this Pseudo to Login </h1>";
       // $this->loginU=$login;
       // $this->pwdU=$pwd;
       // $idU=$id;
        
        return $this->render('PidevAllForDealBundle:Admin:AdminSpace.html.twig',array('admin'=>$admin));  

        }else{
         // print"<h6 style='color:red'>Erreur de Connexion , Veillez Réssayer </h6>";  
         echo"<!DOCTYPE html> <script> alert('Erreur de Connexion , Veillez Réssayer'); </script>";
         echo"<div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
         
        //    echo "<h1 style='color:red'> Pseudo Existe Déja : This Pseudo is used by Some One else ,and registred into the db </h1>";
         return $this->render('PidevAllForDealBundle:Admin:LoginAdmin.html.twig',array()); 
        }
         
         
         //  return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array('users'=>$user)); 
        }
    }
    
    public function ListUsersAllAction(){
        
        $em=$this->getDoctrine()->getManager();
        $users=$em->getRepository("PidevAllForDealBundle:Utilisateur")
                ->findAll();
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
        return $this->render("PidevAllForDealBundle:Admin:AllListUsers.html.twig",
                array('u'=>$users));
    
    }
    public function ListEditableUsersAllAction(){
        
        $em=$this->getDoctrine()->getManager();
        $users=$em->getRepository("PidevAllForDealBundle:Utilisateur")
                ->findAll();
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
        return $this->render("PidevAllForDealBundle:Admin:EditListUsers.html.twig",
                array('u'=>$users));
    
    }
    
    public function SupprimerUserAction($id){
        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository('PidevAllForDealBundle:Utilisateur')->find($id);
        $em->remove($user);
        $em->flush();
        if($em){
           echo"<!DOCTYPE html> <script> alert('Suppression de l'Utilisateur a été éffectué avec succés'); </script>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EspaceAdminAllListUser'));        
        }else{
           echo"<!DOCTYPE html> <script> alert('Suppression de l'Utilisateur a été échoué'); </script>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EspaceAdminAcceuil'));        

        }
       
    }
    
    public function BloquerUserAction($id){
        /*$query=$this->getEntityManager()
                      ->createQuery("update u  PidevAllForDealBundle:Utilisateur u set u.ban=:1 where u.idUser=:ID")
                      ->setParameters(array('ID'=>$id));
        $query->flush();*/
       // return $query->getSQL()->getResult();
       /* $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository('PidevAllForDealBundle:Utilisateur')->find($id);
        $em->remove($user);
        $em->flush();*/
       $em=$this->getDoctrine()->getManager();
       $user=$em->getRepository("PidevAllForDealBundle:Utilisateur")->find($id);
       $user->setBan(1);
       $em->persist($user);
       $em->flush();
        if($em){
           echo"<!DOCTYPE html> <script> alert('Bloquage de l'Utilisateur a été éffectué avec succés'); </script>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EditableEspaceAdminAllListUser'));        
        }else{
           echo"<!DOCTYPE html> <script> alert('Bloquage de l'Utilisateur a été échoué'); </script>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EspaceAdminAcceuil'));        

        }
       
    }
    
    public function DebloquerUserAction($id){
         
       $em=$this->getDoctrine()->getManager();
       $user=$em->getRepository("PidevAllForDealBundle:Utilisateur")->find($id);
       $user->setBan(Null);
       $em->persist($user);
       $em->flush();
        if($em){
           echo"<!DOCTYPE html> <script> alert('Débloquage de l'Utilisateur a été éffectué avec succés'); </script>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EditableEspaceAdminAllListUser'));        
        }else{
           echo"<!DOCTYPE html> <script> alert('Débloquage de l'Utilisateur a été échoué'); </script>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EspaceAdminAcceuil'));        

        }
    }
    
    public function listeUserBloquesAction(){
     //   $request=$this->get('request_stack')->getCurrentRequest();
       // $ban=$request->set(1); 
        $ban=1;
        $em=$this->getDoctrine()->getManager();
        $users=$em->getRepository("PidevAllForDealBundle:Utilisateur")->findBy(array('ban'=>$ban));
      //  $users->getBan(1);
       // return $query->getSQL()->getResult();
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
        return $this->render("PidevAllForDealBundle:Admin:ListeUsersBloques.html.twig",
                array('u'=>$users));
    }
    
  /*  public function AdminProfilUserAction($id){
        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository('PidevAllForDealBundle:Utilisateur')->find($id);
        $form=$this->createForm(new UtilisateurType(),$user );
        $request=$this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateURL('pidev_all_for_deal_EspaceAdminAllListUser'));
        }
        return $this->render('PidevAllForDealBundle:Admin:AdminViewUserProfile.html.twig',
                array('Form'=>$form->createView()));        
    } */
    
    public function AdminProfilUserAction($id){
        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository("PidevAllForDealBundle:Utilisateur")->find($id);
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
        return $this->render("PidevAllForDealBundle:Admin:AdminViewUserProfile.html.twig",array('thisUser'=>$user));        
    }
    
    public function AdminProfileAction($login,$pwd){
         $em=$this->getDoctrine()->getManager(); 
         $Admin=$em->getRepository('PidevAllForDealBundle:Admin')->findBy(array('loginAdmin'=>$login,'pwdAdmin'=>$pwd));
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
        return $this->render('PidevAllForDealBundle:Admin:AdminComptePerso.html.twig',array('ThisAdmin'=>$Admin));   
    }
    
    public function AdminUpdateCompteAction($id){
          $request=$this->getRequest();
        if ($request->getMethod()=='POST'){
            
            $nom=$request->get('nom_id');
            $prnm=$request->get('prnm_id');
            $age=$request->get('age_id');
            $sexe=$request->get('choixSexe');
            $email=$request->get('email_id');
            $login=$request->get('login_id');
            $pwd=$request->get('password');           
            $em=$this->getDoctrine()->getManager();
            $admin=$em->getRepository('PidevAllForDealBundle:Admin')->find($id);
            $admin->setNomAdmin($nom);
            $admin->setPrnmAdmin($prnm);
            $admin->setAgeAdmin($age);
            $admin->setSexeAdmin($sexe);
            $admin->setEmailAdmin($email);
            $admin->setLoginAdmin($login);
            $admin->setPwdAdmin($pwd);
          //  $em->persist($user);// c'est la meme que "insert into ...."
            $em->flush(); // pour faire la mise à jour dans la base de donnés
            if($em){
                echo"<!DOCTYPE html><script> alert('Modification du votre compte a été éffectué avec succés'); </script>";          
             //   echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
             //   echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$login."<b></p> </div></div>";         
            //       return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
          //     echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           //    echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin</i><b>rootWalid<b></p> </div></div>";
            return $this->render('PidevAllForDealBundle:Admin:LoginAdmin.html.twig',array()); 
 
           }else{
                echo"<!DOCTYPE html><script> alert('Modification du votre compte a été échoué'); </script>";          
              //  echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
              //  echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$login."<b></p> </div></div>";         
         //                return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
                     //    echo"<div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";

         return $this->render('PidevAllForDealBundle:Admin:LoginAdmin.html.twig',array()); 

              }
         return $this->render('PidevAllForDealBundle:Admin:LoginAdmin.html.twig',array()); 
    //  return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
       // return new Response('Created User id '.$user->getIdUser());
       
    }
         // return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
         return $this->render('PidevAllForDealBundle:Admin:LoginAdmin.html.twig',array()); 

      // return $this->render('PidevAllForDealBundle:CompteUser:CompteUser.html.twig',array('user'=>$user));  
  }
}
