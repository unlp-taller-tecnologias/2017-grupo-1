<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Visitante;
use AppBundle\Entity\Enfermedad;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * RegistroEnfermedades
 *
 * @ORM\Table(name="registro_enfermedades")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegistroEnfermedadesRepository")
 */
class RegistroEnfermedades {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var datetime
     * 
     * @ORM\Column(name="fechaInicio", type="datetime")
     * @Assert\NotBlank(
     *      message="Se debe seleccionar una fecha de inicio de la enfermedad registrada."
     * )
     * @Assert\DateTime(
     *      message="El campo fecha de inicio debe ser del tipo fecha."
     * )
     */
    protected $fechaInicio;

    /**
     * @var datetime
     * 
     * @ORM\Column(name="fechaFin", type="datetime", nullable=true)
     * 
     */
    protected $fechaFin;

    /**
     * @var string
     * 
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    protected $observacion;

    /**
     * @var Visitante
     * 
     * @ORM\ManyToOne(targetEntity="Visitante", inversedBy="registroEnfermedades")
     * @ORM\JoinColumn(name="propietario_id", referencedColumnName="id")
     * @Assert\NotNull(
     *      message="Se debe seleccionar una propietario del registro de enfermedad."
     * )
     */
    protected $propietario;

    /**
     * @var Enfermedad
     * 
     * @ORM\ManyToOne(targetEntity="Enfermedad")
     * @ORM\JoinColumn(name="enfermedad_id", referencedColumnName="id")
     * @Assert\NotNull( 
     *      message="Se debe seleccionar una enfermedad del sistema."
     * )
     */
    protected $enfermedad;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    function getFechaInicio() {
        return $this->fechaInicio;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    function getFechaFin() {
        return $this->fechaFin;
    }

    function getObservacion() {
        return $this->observacion;
    }

    function getEnfermedad() {
        return $this->enfermedad;
    }

    /**
     * Set Fecha Inicio
     * 
     * @param \DateTime $fechaInicio
     *
     * @return RegistroEnfermedades
     */
    function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
    }

    /**
     * Set Fecha Fin
     * 
     * @param \DateTime $fechaFin
     *
     * @return RegistroEnfermedades
     */
    function setFechaFin($fechaFin) {
        $this->fechaFin = $fechaFin;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

    function setEnfermedad(Enfermedad $enfermedad) {
        $this->enfermedad = $enfermedad;
    }

    function getPropietario() {
        return $this->propietario;
    }

    function setPropietario(Visitante $propietario) {
        $this->propietario = $propietario;
    }

}
