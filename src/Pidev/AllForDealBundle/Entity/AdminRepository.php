<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pidev\AllForDealBundle\Entity;
use Doctrine\ORM\EntityRepository;

/**
 * Description of AdminRepository
 *
 * @author Edzio
 */
class AdminRepository extends EntityRepository{
   
    public function AdminLoginIn($login,$pwd,$id){
        $query=$this->getEntityManager()
                      ->createQuery("select a from PidevAllForDealBundle:Admin a where a.loginAdmin=:Login,a.pwdAdmin=:Pwd and a.idAdmin=:ID")
                      ->setParameters(array('Login'=>$login,'Pwd'=>$pwd,'ID'=>$id));
        return $query->getSQL()->getResult();
       
    }    
}