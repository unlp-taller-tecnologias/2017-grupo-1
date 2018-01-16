<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Componente;
use AppBundle\Entity\Usuario;
use AppBundle\Entity\Visitante;
use AppBundle\Entity\Observacion;


/**
 * RegistroVacunacion
 *
 * @ORM\Table(name="registro_vacunacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegistroVacunacionRepository")
 */
class RegistroVacunacion {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="cumple", type="boolean")
     */
    private $cumple;

    /**
     * @var Visitante
     * @ORM\OneToOne(targetEntity="Visitante", mappedBy="registroVacunacion")
     */
    private $propietario;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Observacion", mappedBy="registroVacunacion")
     */
    private $observaciones;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaCreacion", type="date")
     */
    private $fechaCreacion;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaActualizacion", type="date", nullable=true)
     */
    private $fechaActualizacion;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="creador_id", referencedColumnName="id")
     */
    private $creador;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="actualizadoPor_id", referencedColumnName="id")
     */
    private $actualizadoPor;

    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Componente", mappedBy="registroVacunacion")
     */
    private $componentes;

  

    public function __construct() {
        $this->componentes = new ArrayCollection();
        $this->observaciones = new ArrayCollection();
    }

    /**
     * 
     */
    public function addComponente(Componente $componente) {
        $this->componentes->add($componente);
    }

    /**
     * 
     */
    public function removeComponente(Componente $componente) {
        return $this->getComponentes()->removeElement($componente);
    }

    /**
     * 
     */
    public function addObservacion(Observacion $observacion) {
        $this->observaciones->add($observacion);
    }

    /**
     * 
     */
    public function removeObservacion(Observacion $observacion) {
        return $this->observaciones->removeElement($observacion);
    }

    function getComponentes() {
        return $this->componentes;
    }

    function setComponentes($componentes) {
        $this->componentes = $componentes;
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
     * Set cumple
     *
     * @param boolean $cumple
     *
     * @return RegistroVacunacion
     */
    public function setCumple($cumple) {
        $this->cumple = $cumple;

        return $this;
    }

    /**
     * Get cumple
     *
     * @return boolean
     */
    public function getCumple() {
        return $this->cumple;
    }

    function getPropietario() {
        return $this->propietario;
    }

    function setPropietario(Visitante $propietario) {
        $this->propietario = $propietario;
    }

    function getObservaciones() {
        return $this->observaciones;
    }

    function setObservaciones(ArrayCollection $observaciones) {
        $this->observaciones = $observaciones;
    }

    /**
     * Set fechaCreacion
     *
     * @param \Date $fechaCreacion
     *
     * @return RegistroVacunacion
     */
    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \Date
     */
    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \Date $fechaActualizacion
     *
     * @return RegistroVacunacion
     */
    public function setFechaActualizacion($fechaActualizacion) {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
    }

    /**
     * Get fechaActualizacion
     *
     * @return \Date
     */
    public function getFechaActualizacion() {
        return $this->fechaActualizacion;
    }

    function getCreador() {
        return $this->creador;
    }

    function getActualizadoPor() {
        return $this->actualizadoPor;
    }

    function setCreador(Usuario $creador) {
        $this->creador = $creador;
    }

    function setActualizadoPor(Usuario $actualizadoPor) {
        $this->actualizadoPor = $actualizadoPor;
    }

}
