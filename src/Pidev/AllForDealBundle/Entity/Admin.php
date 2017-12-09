<?php

namespace Pidev\AllForDealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity
 */
class Admin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_admin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_admin", type="string", length=20, nullable=false)
     */
    private $nomAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="prnm_admin", type="string", length=20, nullable=false)
     */
    private $prnmAdmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="age_admin", type="integer", nullable=false)
     */
    private $ageAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe_admin", type="string", length=20, nullable=false)
     */
    private $sexeAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="email_admin", type="text", nullable=false)
     */
    private $emailAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="login_admin", type="string", length=30, nullable=false)
     */
    private $loginAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd_admin", type="string", length=30, nullable=false)
     */
    private $pwdAdmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="connect", type="integer",length=1,nullable=true)
     */
    private $connect;

    function getIdAdmin() {
        return $this->idAdmin;
    }

    function getNomAdmin() {
        return $this->nomAdmin;
    }

    function getPrnmAdmin() {
        return $this->prnmAdmin;
    }

    function getAgeAdmin() {
        return $this->ageAdmin;
    }

    function getSexeAdmin() {
        return $this->sexeAdmin;
    }

    function getEmailAdmin() {
        return $this->emailAdmin;
    }

    function getLoginAdmin() {
        return $this->loginAdmin;
    }

    function getPwdAdmin() {
        return $this->pwdAdmin;
    }

    function setIdAdmin($idAdmin) {
        $this->idAdmin = $idAdmin;
    }

    function setNomAdmin($nomAdmin) {
        $this->nomAdmin = $nomAdmin;
    }

    function setPrnmAdmin($prnmAdmin) {
        $this->prnmAdmin = $prnmAdmin;
    }

    function setAgeAdmin($ageAdmin) {
        $this->ageAdmin = $ageAdmin;
    }

    function setSexeAdmin($sexeAdmin) {
        $this->sexeAdmin = $sexeAdmin;
    }

    function setEmailAdmin($emailAdmin) {
        $this->emailAdmin = $emailAdmin;
    }

    function setLoginAdmin($loginAdmin) {
        $this->loginAdmin = $loginAdmin;
    }

    function setPwdAdmin($pwdAdmin) {
        $this->pwdAdmin = $pwdAdmin;
    }

    function getConnect() {
        return $this->connect;
    }

    function setConnect($connect) {
        $this->connect = $connect;
    }



}
