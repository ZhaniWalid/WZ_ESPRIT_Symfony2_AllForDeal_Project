<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pidev\AllForDealBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * Description of UtilisateurRepository
 *
 * @author Edzio
 */
class UtilisateurRepository extends EntityRepository{
    
    
    public function RechercheLogin($login,$pwd,$id){
        $query=$this->getEntityManager()
                      ->createQuery("select u from PidevAllForDealBundle:Utilisateur u where u.loginUser=:Login,u.pwdUser=:Pwd and u.idUser=:ID")
                      ->setParameters(array('Login'=>$login,'Pwd'=>$pwd,'ID'=>$id));
        return $query->getSQL()->getResult();
       
    }
}
