<?php

namespace Pidev\AllForDealBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", length=20, nullable=true)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_user", type="string", length=20, nullable=true)
     */
    private $prenomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_user", type="string", length=50, nullable=true)
     */
    private $adresseUser;

    /**
     * @var string
     *
     * @ORM\Column(name="email_user", type="string", length=50, nullable=false)
     */
    private $emailUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel_user", type="integer", nullable=true)
     */
    private $telUser;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_user", type="string", length=20, nullable=true)
     */
    private $statutUser;

    /**
     * @var string
     *
     * @ORM\Column(name="login_user", type="string", length=50, nullable=false)
     */
    private $loginUser;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd_user", type="string", length=50, nullable=false)
     */
    private $pwdUser;

    /**
     * @var string
     *
     * @ORM\Column(name="enc_pwd", type="string", length=50, nullable=true)
     */
    private $enc_pwd;
    
    /**
     * @var string
     *
     * @ORM\Column(name="sexe_user", type="string", length=20, nullable=true)
     */
    private $sexeUser;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ban", type="integer", nullable=true)
     */
    private $ban;

    /**
     *
     * @ORM\Column(name="photo_user", type="blob", length=500, nullable=true)
     */
    private $photoUser;  
    
    /**
     *
     * @ORM\Column(name="photoVarchar", type="string", length=255, nullable=true)
     */
    private $photoVarchar;  
    
    /**
     * @var File
     * @Assert\Type(type="File")
     * @Assert\File(
     *     maxSize = "5M",
     *     mimeTypes = {"image/jpeg", "image/gif", "image/png", "image/tiff"},
     *     maxSizeMessage = "Taille maximal autorisé est 5MB.",
     *     mimeTypesMessage = "seulement les images sont autorisés."
     * )
     */
    private $file;
            
     /**
     * @var integer
     *
     * @ORM\Column(name="connect", type="integer",length=1,nullable=true)
     */
    private $connect;
    
      /**
     * @var integer
     *
     * @ORM\Column(name="confirmed", type="integer", nullable=true)
     */
    private $confirmed;
    
       /**
     * @var integer
     *
     * @ORM\Column(name="confirm_code", type="integer", nullable=true)
     */
    private $confirm_code;
    
    
    function getPhotoVarchar() {
        return $this->photoVarchar;
    }

    function setPhotoVarchar($photoVarchar) {
        $this->photoVarchar = $photoVarchar;
    }

        
    function __construct() {
        
    }

    function getEnc_pwd() {
        return $this->enc_pwd;
    }

    function setEnc_pwd($enc_pwd) {
        $this->enc_pwd = $enc_pwd;
    }

        
    function getConfirmed() {
        return $this->confirmed;
    }

    function getConfirm_code() {
        return $this->confirm_code;
    }

    function setConfirmed($confirmed) {
        $this->confirmed = $confirmed;
    }

    function setConfirm_code($confirm_code) {
        $this->confirm_code = $confirm_code;
    }

        function getIdUser() {
        return $this->idUser;
    }

    function getNomUser() {
        return $this->nomUser;
    }

    function getPrenomUser() {
        return $this->prenomUser;
    }

    function getAdresseUser() {
        return $this->adresseUser;
    }

    function getEmailUser() {
        return $this->emailUser;
    }

    function getTelUser() {
        return $this->telUser;
    }

    function getStatutUser() {
        return $this->statutUser;
    }

    function getLoginUser() {
        return $this->loginUser;
    }

    function getPwdUser() {
        return $this->pwdUser;
    }

    function getSexeUser() {
        return $this->sexeUser;
    }

   

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
    }

    function setPrenomUser($prenomUser) {
        $this->prenomUser = $prenomUser;
    }

    function setAdresseUser($adresseUser) {
        $this->adresseUser = $adresseUser;
    }

    function setEmailUser($emailUser) {
        $this->emailUser = $emailUser;
    }

    function setTelUser($telUser) {
        $this->telUser = $telUser;
    }

    function setStatutUser($statutUser) {
        $this->statutUser = $statutUser;
    }

    function setLoginUser($loginUser) {
        $this->loginUser = $loginUser;
    }

    function setPwdUser($pwdUser) {
        $this->pwdUser = $pwdUser;
    }

    function setSexeUser($sexeUser) {
        $this->sexeUser = $sexeUser;
    }

  
    function getBan() {
        if($this->ban==Null){
             echo"<p style='color:green'>Non Bloqué</p>";
        }else{
             echo"<p style='color:red'>Bloqué</p>"; 
        }
     //return $this->ban;
    }

    function setBan($ban) {
     $this->ban = $ban;
    }

    function getConnect() {
        return $this->connect;
    }

    function setConnect($connect) {
        $this->connect = $connect;
    }

    
    
    // photo editor
    
    function getPhotoUser() {
        return $this->photoUser;
    }

    function setPhotoUser($photoUser) {
        $this->photoUser = $photoUser;
    }

   function getFile() {
        return $this->file;
    }

    function setFile(File $file) {
        $this->file = $file;
    }

    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function upload()
  {
    if (null === $this->file) {
        return;
    }

    $strm = fopen($this->file->getRealPath(),'rb');
    echo $this->file->getRealPath();
    $this->setPhotoUser(base64_encode(stream_get_contents($strm)));
    
  }

  public function readPhoto(){
    
     if (null === $this->getPhotoUser()) {
        return;
    }
    $photoUser = '';
    while(!feof($this->getPhotoUser())){
        $photoUser.= fread($this->getPhotoUser(), 1024);
    }
    rewind($this->getPhotoUser());
    return $photoUser;
  }
  
 public function __toString() {
   return $this->getNomUser()." ";   
 }
 
 /* private $repeat;

 function getRepeat() {
    return $this->repeat;
   }

  function setRepeat($repeat) {
    $this->repeat = $repeat;
 }*/


    



}
