<?php

namespace Pidev\AllForDealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cadeaux
 *
 * @ORM\Table(name="cadeaux")
 * @ORM\Entity
 */
class Cadeaux
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cadeau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCadeau;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_pts_bonus_cad", type="integer", nullable=false)
     */
    private $nbrPtsBonusCad;

    /**
     * @var string
     *
     * @ORM\Column(name="descrp_cad", type="string", length=200, nullable=false)
     */
    private $descrpCad;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="blob", nullable=false)
     */
    private $image;


}
