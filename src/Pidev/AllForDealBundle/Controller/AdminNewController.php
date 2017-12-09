<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pidev\AllForDealBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Pidev\AllForDealBundle\Entity\Admin;
use Pidev\AllForDealBundle\Entity\AdminRepository;
use Pidev\AllForDealBundle\Form\UtilisateurType;
use Pidev\AllForDealBundle\Form\Utilisateur;
/**
 * Description of AdminNewController
 *
 * @author Edzio
 */
class AdminNewController  extends Controller{
  
    public function AcceuilEspaceAdminAction(){
        
       $emAdmin=$this->getDoctrine()->getManager();
       $admin=$emAdmin->getRepository('PidevAllForDealBundle:Admin')->findOneBy(array('connect'=>1));    
      
       echo"<!Doctype html><div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
       echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$admin->getLoginAdmin()."<b></p> </div></div>";           
        return $this->render('PidevAllForDealBundle:AdminNew:AcceuilAdmin.html.twig',array());   
    }
    
    public function AcceuiLoginAdminAction(){
        echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
        return $this->render('PidevAllForDealBundle:AdminNew:LoginAdmin.html.twig', array());
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
            $admin=$em->getRepository('PidevAllForDealBundle:Admin')->findOneBy(array('loginAdmin'=>$login,'pwdAdmin'=>$pwd,'connect'=>Null));
     //       $admin=$em->getRepository('PidevAllForDealBundle:Admin')->findBy(array('loginAdmin'=>$login,'pwdAdmin'=>$pwd));

        if($admin){
        
        
         // aprés que la connexion serait bien établie    
          $admin->setConnect(1);
          $em->persist($admin);
          $em->flush();
            
       //  $this->get('session')->getFlashBag()->add('LogintAdminSucceed', 'logout user');        
   
        echo"<!DOCTYPE html> <script> alert('Connexion a été établie avec succés , Bienvenu chez All For Deal dans Espace Adminstrative'); </script>";  
        echo"<!DOCTYPE html><div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>".$login."<b></p> </div></div>";

        // echo"alert('Connexion a été établie avec succés , Bienvenu chez All For Deal dans Espace Client Mr/Mme : '.$login);";
           //     echo "<h1 style='color:green'> Pseudo Disponible : You Can Use this Pseudo to Login </h1>";
       // $this->loginU=$login;
       // $this->pwdU=$pwd;
       // $idU=$id;
        
        
        
        return $this->render('PidevAllForDealBundle:AdminNew:AdminSpace.html.twig',array());  

        }else{
         // print"<h6 style='color:red'>Erreur de Connexion , Veillez Réssayer </h6>";  
  //  $this->get('session')->getFlashBag()->add('LogintAdminFailed', 'logout user');    
        // echo "<!DOCTYPE html><div><p  style='color=red;'> Connection a été échoué </p></div>";  
         echo"<!DOCTYPE html> <script> alert('Erreur de Connexion , Veillez Réssayer'); </script>";
         echo"<!DOCTYPE html><div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";
         
        //    echo "<h1 style='color:red'> Pseudo Existe Déja : This Pseudo is used by Some One else ,and registred into the db </h1>";
         return $this->render('PidevAllForDealBundle:AdminNew:LoginAdmin.html.twig',array()); 
        }
         
         
         //  return $this->render('PidevAllForDealBundle:Acceuil:Acceuil.html.twig',array('users'=>$user)); 
        }
    }
    
    public function ListUsersAllAction(Request $request){
        
          // $em=$this->getDoctrine()->getManager();
         // $users=$em->getRepository("PidevAllForDealBundle:Utilisateur")->findAll();
        //$query2 = $em->createQuery($users);
       //$request=new Request();
        
        
        // pagination avec knp_paginator_bundle
        $em=$this->get('doctrine.orm.entity_manager');
        $dql= "SELECT u FROM PidevAllForDealBundle:Utilisateur u";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $users = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1) /*page number*/,
        5 /*limit per page*/
        );
        
         $emAdmin=$this->getDoctrine()->getManager();
         $admin=$emAdmin->getRepository('PidevAllForDealBundle:Admin')->findOneBy(array('connect'=>1));
         
         
        echo"<!Doctype html><div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$admin->getLoginAdmin()."<b></p> </div></div>";        
    return $this->render("PidevAllForDealBundle:AdminNew:AllListUsers.html.twig",array('u'=>$users));    
    }
    
    public function ListEditableUsersAllAction(Request $request){
        
      //  $em=$this->getDoctrine()->getManager();
      //  $users=$em->getRepository("PidevAllForDealBundle:Utilisateur")->findAll();
        
        // pagination avec knp_paginator_bundle
       $em=$this->get('doctrine.orm.entity_manager');
       $dql= "SELECT u FROM PidevAllForDealBundle:Utilisateur u";
       $query = $em->createQuery($dql);
        
        $paginator  = $this->get('knp_paginator');
        $users = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1) /*page number*/,
        5 /*limit per page*/
       );
        
      $emAdmin=$this->getDoctrine()->getManager();
      $admin=$emAdmin->getRepository('PidevAllForDealBundle:Admin')->findOneBy(array('connect'=>1));    
      
       echo"<!Doctype html><div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
       echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$admin->getLoginAdmin()."<b></p> </div></div>";        
        return $this->render("PidevAllForDealBundle:AdminNew:EditListUsers.html.twig",array('u'=>$users));
    
    }
    
    public function listeUserBloquesAction(Request $request){
     //   $request=$this->get('request_stack')->getCurrentRequest();
       // $ban=$request->set(1); 
        
       /* $em=$this->getDoctrine()->getManager();
        $users=$em->getRepository("PidevAllForDealBundle:Utilisateur")->findBy(array('ban'=>$ban));*/
        
         
        $ban=1;  
         // pagination avec knp_paginator_bundle
        $em=$this->get('doctrine.orm.entity_manager');
        $dql= "SELECT u FROM PidevAllForDealBundle:Utilisateur u where u.ban=$ban";
        $query = $em->createQuery($dql);
        
        $paginator  = $this->get('knp_paginator');
        $users = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1) /*page number*/,
        3 /*limit per page*/
        );
       
       $emAdmin=$this->getDoctrine()->getManager();
       $admin=$emAdmin->getRepository('PidevAllForDealBundle:Admin')->findOneBy(array('connect'=>1));    
      
       echo"<!Doctype html><div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
       echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$admin->getLoginAdmin()."<b></p> </div></div>";           
       
        return $this->render("PidevAllForDealBundle:AdminNew:ListeUsersBloques.html.twig",array('u'=>$users));
    }
    
    public function SupprimerUserAction($id){
        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository('PidevAllForDealBundle:Utilisateur')->find($id);
        $em->remove($user);
        $em->flush();
        if($em){
           echo"<!DOCTYPE html> <script> alert('Suppression de l'Utilisateur a été éffectué avec succés'); </script>";
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EspaceAdminAllListUser2'));        
        }else{
           echo"<!DOCTYPE html> <script> alert('Suppression de l'Utilisateur a été échoué'); </script>";
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EspaceAdminAcceuil2'));        

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
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EditableEspaceAdminAllListUser2'));        
        }else{
           echo"<!DOCTYPE html> <script> alert('Bloquage de l'Utilisateur a été échoué'); </script>";
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EspaceAdminAcceuil2'));        

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
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EditableEspaceAdminAllListUser2'));        
        }else{
           echo"<!DOCTYPE html> <script> alert('Débloquage de l'Utilisateur a été échoué'); </script>";
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
         return $this->redirect($this->generateUrl('pidev_all_for_deal_EspaceAdminAcceuil2'));        
        }
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
        echo"<!DOCTYPE html><div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
        return $this->render("PidevAllForDealBundle:AdminNew:AdminViewUserProfile.html.twig",array('thisUser'=>$user));        
    }
    
    public function AdminProfileAction($login,$pwd){
         $em=$this->getDoctrine()->getManager();
         $Admin=$em->getRepository('PidevAllForDealBundle:Admin')->findBy(array('loginAdmin'=>$login,'pwdAdmin'=>$pwd));
        echo"<!DOCTYPE html><div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
        return $this->render('PidevAllForDealBundle:AdminNew:AdminComptePerso.html.twig',array('ThisAdmin'=>$Admin));   
    }
    
    public function AdminProfile2Action(){

         $em=$this->getDoctrine()->getManager();
         $Admin=$em->getRepository('PidevAllForDealBundle:Admin')->findOneBy(array('connect'=>1));
         $login=$Admin->getLoginAdmin();
         $pwd=$Admin->getPwdAdmin();
         $TrueAdmin=$em->getRepository('PidevAllForDealBundle:Admin')->findBy(array('loginAdmin'=>$login,'pwdAdmin'=>$pwd,'connect'=>1));
        echo"<!DOCTYPE html><div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
        return $this->render('PidevAllForDealBundle:AdminNew:AdminComptePerso.html.twig',array('ThisAdmin'=>$TrueAdmin));   
    }
     
      
    public function logoutAdminAction(){
        
         $em=$this->getDoctrine()->getManager();
         $Admin=$em->getRepository('PidevAllForDealBundle:Admin')->findOneBy(array('connect'=>1));
       // aprés que la connexion serait bien établie    
          $Admin->setConnect(Null); 
          $em->persist($Admin);
          $em->flush();
           
        return $this->render('PidevAllForDealBundle:AdminNew:LoginAdmin.html.twig',array());
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
              
              $admin->setConnect(Null);  
              $em->persist($admin);
              $em->flush();
                echo"<!DOCTYPE html><script> alert('Modification du votre compte a été éffectué avec succés'); </script>";          
             //   echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
             //   echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$login."<b></p> </div></div>";         
            //       return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
          //     echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
           //    echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin</i><b>rootWalid<b></p> </div></div>";
            return $this->render('PidevAllForDealBundle:AdminNew:LoginAdmin.html.twig',array()); 
 
           }else{
                echo"<!DOCTYPE html><script> alert('Modification du votre compte a été échoué'); </script>";          
              //  echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
              //  echo"<div class='help_line'><div><p style='color:green'><i class='fa fa-user' style=''></i>Bienvenu </i>Mr/Mme : <b>".$login."<b></p> </div></div>";         
         //                return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
                     //    echo"<div class='help_line'><div><p style='color:red'><i class='fa fa-circle' style='color:red'></i>Disconnected</p></div></div>";

         return $this->render('PidevAllForDealBundle:AdminNew:LoginAdmin.html.twig',array()); 

              }
         return $this->render('PidevAllForDealBundle:AdminNew:LoginAdmin.html.twig',array()); 
    //  return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
       // return new Response('Created User id '.$user->getIdUser());
       
    }
         // return $this->redirect($this->generateURL('pidev_all_for_deal_AccesCompteUser'));
         return $this->render('PidevAllForDealBundle:AdminNew:LoginAdmin.html.twig',array()); 

      // return $this->render('PidevAllForDealBundle:CompteUser:CompteUser.html.twig',array('user'=>$user));  
  }
  
  
 /* public function DynamicSearchAllListUsersAction(Request $request){
      
       $request = $this->container->get('request');
       $motcle = '';
       
    if($request->isXmlHttpRequest())
    {
        
        $motcle = $request->request->get('motcle');

        $em = $this->container->get('doctrine')->getEntityManager();

        if($motcle != '')
        {
               $qb = $em->createQueryBuilder();

               $qb->select('u')
                  ->from('PidevAllForDealBundle:Utilisateur', 'u')
                  ->where("u.adresseUser LIKE :motcle OR u.statutUser LIKE :motcle")
                  ->orderBy('u.nomUser', 'ASC')
                  ->setParameter('motcle', '%'.$motcle.'%');

               $query = $qb->getQuery();               
               $users = $query->getResult();
        }
        else {
            $users = $em->getRepository('PidevAllForDealBundle:Utilisateur')->findAll();
        }

      //  return $this->container->get('templating')->renderResponse("PidevAllForDealBundle:AdminNew:AllListUsers.html.twig",array('u'=>$users));
      return $this->render("PidevAllForDealBundle:AdminNew:AllListUsers.html.twig",array('u'=>$users));
        
        }
    else {
        return $this->ListUsersAllAction();
        }
    
  } */
  
  
  public function DynamicSearchAllListUsersAction(Request $request){
      
      $request2=$this->get('request_stack')->getCurrentRequest();
      
        
        // pagination avec knp_paginator_bundle
         $search=$request2->get('inSearching');    
         $em=$this->get('doctrine.orm.entity_manager');
        // $em=$this->getDoctrine()->getManager();
         $query=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findBy(array('statutUser'=>$search));
        //$dql="SELECT u FROM PidevAllForDealBundle:Utilisateur u where u.statutUser=$search";
        //$query = $em->createQuery($dql); 
 
        $paginator  = $this->get('knp_paginator');
        $users = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1) /*page number*/,
        5 /*limit per page*/
        );
        echo"<!DOCTYPE html><div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
          // return $this->redirectToRoute("pidev_all_for_deal_EspaceAdminAllListUser2");

          //  $em=$this->getDoctrine()->getManager();
           // $users=$em->getRepository("PidevAllForDealBundle:Utilisateur")->findBy(array('adresseUser'=>$search,'statutUser'=>$search),array('nomUser'=>'asc')); // 'asc' : ordre croissant <#> 'desc' : ordre décroissant  
      if($query){
          return $this->render("PidevAllForDealBundle:AdminNew:AllListUsers.html.twig",array('u'=>$users)); 
      }else{
          echo "<!DOCTYPE html> <script> alert('nothing found'); </script>";
          return $this->render("PidevAllForDealBundle:AdminNew:AllListUsers.html.twig",array('u'=>$users)); 
      }
  
  }
  
  public function DynamicSearchAllListEditableUsersAction(Request $request){
      
      $request2=$this->get('request_stack')->getCurrentRequest();
      
        
        // pagination avec knp_paginator_bundle
         $search=$request2->get('inSearching');    
         $em=$this->get('doctrine.orm.entity_manager');
        // $em=$this->getDoctrine()->getManager();
         $query=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findBy(array('nomUser'=>$search));
        // $query=$em->getEntityManager()->createQuery("SELECT u FROM PidevAllForDealBundle:Utilisateur u where u.prenomUser like ':$search%' ");
        //$dql="SELECT u FROM PidevAllForDealBundle:Utilisateur u where u.statutUser=$search";
        //$query = $em->createQuery($dql); 
 
        $paginator  = $this->get('knp_paginator');
        $users = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1) /*page number*/,
        5 /*limit per page*/
        );
        echo"<!DOCTYPE html><div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
          // return $this->redirectToRoute("pidev_all_for_deal_EspaceAdminAllListUser2");

          //  $em=$this->getDoctrine()->getManager();
           // $users=$em->getRepository("PidevAllForDealBundle:Utilisateur")->findBy(array('adresseUser'=>$search,'statutUser'=>$search),array('nomUser'=>'asc')); // 'asc' : ordre croissant <#> 'desc' : ordre décroissant  
      if($query){
          return $this->render("PidevAllForDealBundle:AdminNew:EditListUsers.html.twig",array('u'=>$users)); 
      }else{
          echo "<!DOCTYPE html> <script> alert('nothing found'); </script>";
          //  return $this->redirectToRoute("pidev_all_for_deal_EditableEspaceAdminAllListUser2");

          return $this->render("PidevAllForDealBundle:AdminNew:EditListUsers.html.twig",array('u'=>$users)); 
      }
  
  }
  
  public function DynamicListBlockedUsersAction(Request $request){
       
        $ban=1;  
        $request2=$this->get('request_stack')->getCurrentRequest();
      
        
        // pagination avec knp_paginator_bundle
         $search=$request2->get('inSearching');    
         $em=$this->get('doctrine.orm.entity_manager');
        // $em=$this->getDoctrine()->getManager();
         $query=$em->getRepository('PidevAllForDealBundle:Utilisateur')->findBy(array('prenomUser'=>$search,'ban'=>$ban));
        // $query=$em->getEntityManager()->createQuery("SELECT u FROM PidevAllForDealBundle:Utilisateur u where u.prenomUser like ':$search%' ");
        //$dql="SELECT u FROM PidevAllForDealBundle:Utilisateur u where u.statutUser=$search";
        //$query = $em->createQuery($dql); 
 
        $paginator  = $this->get('knp_paginator');
        $users = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1) /*page number*/,
        5 /*limit per page*/
        );
        echo"<!DOCTYPE html><div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-circle' style='color:green'></i>Connected</p></div></div>";
        echo"<div class='help_line' style='text-align:right'><div><p style='color:green'><i class='fa fa-user' style=''></i>Admin </i><b>rootWalid<b></p> </div></div>";
          // return $this->redirectToRoute("pidev_all_for_deal_EspaceAdminAllListUser2");

          //  $em=$this->getDoctrine()->getManager();
           // $users=$em->getRepository("PidevAllForDealBundle:Utilisateur")->findBy(array('adresseUser'=>$search,'statutUser'=>$search),array('nomUser'=>'asc')); // 'asc' : ordre croissant <#> 'desc' : ordre décroissant  
      if($query){
          return $this->render("PidevAllForDealBundle:AdminNew:ListeUsersBloques.html.twig",array('u'=>$users)); 
      }else{
          echo "<!DOCTYPE html> <script> alert('nothing found'); </script>";
          //  return $this->redirectToRoute("pidev_all_for_deal_EditableEspaceAdminAllListUser2");
          return $this->render("PidevAllForDealBundle:AdminNew:ListeUsersBloques.html.twig",array('u'=>$users)); 
      }
  
  }
  
}
