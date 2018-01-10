<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\RegistroVacunacion;
use AppBundle\Entity\Enfermedad;

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
     */
    protected $fechaInicio;

    /**
     * @var datetime
     * 
     * @ORM\Column(name="fechaFin", type="datetime")
     */
    protected $fechaFin;

    /**
     * @var string
     * 
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    protected $observacion;

    /**
     * @var RegistroVacunacion
     * 
     * @ORM\ManyToOne(targetEntity="RegistroVacunacion", inversedBy="registroEnfermedades")
     * @ORM\JoinColumn(name="registroVacunacion_id", referencedColumnName="id")
     */
    protected $registroVacunacion;

    /**
     * @var Enfermedad
     * 
     * @ORM\ManyToOne(targetEntity="Enfermedad")
     * @ORM\JoinColumn(name="enfermedad_id", referencedColumnName="id")
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
    function getFechaInicio(): datetime {
        return $this->fechaInicio;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */

    function getFechaFin(): datetime {
        return $this->fechaFin;
    }

    function getObservacion() {
        return $this->observacion;
    }

    function getRegistroVacunacion(): RegistroVacunacion {
        return $this->registroVacunacion;
    }

    function getEnfermedad(): Enfermedad {
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

    function setRegistroVacunacion(RegistroVacunacion $registroVacunacion) {
        $this->registroVacunacion = $registroVacunacion;
    }

    function setEnfermedad(Enfermedad $enfermedad) {
        $this->enfermedad = $enfermedad;
    }

}
