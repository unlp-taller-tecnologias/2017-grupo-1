<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\TipoObservacion;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\RegistroVacunacion;

/**
 * Observacion
 *
 * @ORM\Table(name="observacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ObservacionRepository")
 */
class Observacion {

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
     * @ORM\Column(name="contenido", type="string", length=255, nullable=true)
     */
    private $contenido;

    /**
     * @var TipoObservacion $tipo
     * 
     * @ORM\ManyToOne(targetEntity="TipoObservacion")
     * @ORM\JoinColumn(name="tipo_id", referencedColumnName="id")
     * @Assert\NotNull(message="El tipo no puede estar sin asignar")
     */
    private $tipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaActualizacion", type="datetime")
     */
    private $fechaActualizacion;

    /**
     * @var Usuario $creadoPor
     * 
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @Assert\NotNull(message="El creador no puede estar sin asignar")
     */
    private $creadoPor;

    /**
     * @var Usuario $actualizadoPor
     * 
     * @ORM\ManyToOne(targetEntity="Usuario")
     */
    private $actualizadoPor;

    /**
     * @var RegistroVacunacion
     * 
     * @ORM\ManyToOne(targetEntity="RegistroVacunacion", inversedBy="observaciones")
     * @ORM\JoinColumn(name="registroVacunacion_id", referencedColumnName="id")
     */
    private $registroVacunacion;

    function getRegistroVacunacion(): RegistroVacunacion {
        return $this->registroVacunacion;
    }

    function setRegistroVacunacion(RegistroVacunacion $registroVacunacion) {
        $this->registroVacunacion = $registroVacunacion;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     *
     * @return Observacion
     */
    public function setContenido($contenido) {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string
     */
    public function getContenido() {
        return $this->contenido;
    }

    /**
     * Set tipo
     *
     * @param \stdClass $tipo
     *
     * @return Observacion
     */
    public function setTipo($tipo) {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \stdClass
     */
    public function getTipo() {
        return $this->tipo;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Observacion
     */
    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     *
     * @return Observacion
     */
    public function setFechaActualizacion($fechaActualizacion) {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
    }

    /**
     * Get fechaActualizacion
     *
     * @return \DateTime
     */
    public function getFechaActualizacion() {
        return $this->fechaActualizacion;
    }

    /**
     * Set creadoPor
     *
     * @param \stdClass $creadoPor
     *
     * @return Observacion
     */
    public function setCreadoPor($creadoPor) {
        $this->creadoPor = $creadoPor;

        return $this;
    }

    /**
     * Get creadoPor
     *
     * @return \stdClass
     */
    public function getCreadoPor() {
        return $this->creadoPor;
    }

    /**
     * Set actualizadoPor
     *
     * @param \stdClass $actualizadoPor
     *
     * @return Observacion
     */
    public function setActualizadoPor($actualizadoPor) {
        $this->actualizadoPor = $actualizadoPor;

        return $this;
    }

    /**
     * Get actualizadoPor
     *
     * @return \stdClass
     */
    public function getActualizadoPor() {
        return $this->actualizadoPor;
    }

}
