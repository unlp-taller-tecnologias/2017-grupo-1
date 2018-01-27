<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\FactorRiesgo;
use AppBundle\Entity\Visitante;

/**
 * RegistroFactorRiesgo
 *
 * @ORM\Table(name="registro_factor_riesgo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegistroFactorRiesgoRepository")
 */
class RegistroFactorRiesgo {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    protected $observacion;

    /**
     * @var FactorRiesgo
     * 
     * @ORM\ManyToOne(targetEntity="FactorRiesgo")
     * @ORM\JoinColumn(name="factorRiesgo_id", referencedColumnName="id")
     */
    protected $factorRiesgo;

    /**
     * @var Visitante
     * 
     * @ORM\ManyToOne(targetEntity="Visitante", inversedBy="registroFactoresRiesgo")
     * @ORM\JoinColumn(name="propietario_id", referencedColumnName="id")
     */
    protected $propietario;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    function getObservacion() {
        return $this->observacion;
    }

    function getPropietario() {
        return $this->propietario;
    }

    function setPropietario(Visitante $propietario) {
        $this->propietario = $propietario;
    }

    function getRegistroVacunacion() {
        return $this->registroVacunacion;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

    function setFactorRiesgo(FactorRiesgo $factorRiesgo) {
        $this->factorRiesgo = $factorRiesgo;
    }

}
