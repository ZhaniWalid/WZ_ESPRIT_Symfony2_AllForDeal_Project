<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pidev\AllForDealBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Description of UserMailer
 *
 * @author Edzio
 */

/**
 * @ORM\Entity
 */
class UserMailer {

     /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $idMail;
    /**
     * @ORM\Column(type="string",length=255 , nullable=false)
     * 
     */
    private $fullNameSender;

    /**
     *  @ORM\Column(type="string", length=30, nullable=false)
     * 
     */
    private $emailSender;

    /**
     * @ORM\Column(type="string",length=30 ,nullable=false)
     * 
     */
    private $SubjectSender;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * 
     */
    private $bodyMail;
    
    function __construct() {
        
    }

    function getIdMail() {
        return $this->idMail;
    }

    function getFullNameSender() {
        return $this->fullNameSender;
    }

    function getEmailSender() {
        return $this->emailSender;
    }

    function getSubjectSender() {
        return $this->SubjectSender;
    }

    function getBodyMail() {
        return $this->bodyMail;
    }

    function setIdMail($idMail) {
        $this->idMail = $idMail;
    }

    function setFullNameSender($fullNameSender) {
        $this->fullNameSender = $fullNameSender;
    }

    function setEmailSender($emailSender) {
        $this->emailSender = $emailSender;
    }

    function setSubjectSender($SubjectSender) {
        $this->SubjectSender = $SubjectSender;
    }

    function setBodyMail($bodyMail) {
        $this->bodyMail = $bodyMail;
    }



  
}
