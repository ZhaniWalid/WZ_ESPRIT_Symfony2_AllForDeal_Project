<?php

namespace Pidev\AllForDealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreService
 *
 * @ORM\Table(name="offre_service", indexes={@ORM\Index(name="id_user", columns={"id_user_rel"})})
 * @ORM\Entity
 */
class OffreService
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_serv_prop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idServProp;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_serv_prop", type="string", length=30, nullable=false)
     */
    private $descServProp;

    /**
     * @var string
     *
     * @ORM\Column(name="date_serv_prop", type="string", length=20, nullable=false)
     */
    private $dateServProp;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_serv_prop", type="string", length=20, nullable=false)
     */
    private $categorieServProp;

    /**
     * @var integer
     *
     * @ORM\Column(name="valid_serv", type="integer", nullable=false)
     */
    private $validServ = '0';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user_rel", referencedColumnName="id_user")
     * })
     */
    private $idUserRel;


}
