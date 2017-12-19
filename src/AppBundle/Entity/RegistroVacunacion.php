<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroVacunacion
 *
 * @ORM\Table(name="registro_vacunacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegistroVacunacionRepository")
 */
class RegistroVacunacion
{
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
     * @var \stdClass
     *
     * @ORM\Column(name="propietario", type="object")
     */
    private $propietario;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="observacionesPublicas", type="object")
     */
    private $observacionesPublicas;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="observacionesPrivadas", type="object")
     */
    private $observacionesPrivadas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualizado", type="datetime", nullable=true)
     */
    private $actualizado;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="creador", type="object")
     */
    private $creador;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="actualizadoPor", type="object")
     */
    private $actualizadoPor;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cumple
     *
     * @param boolean $cumple
     *
     * @return RegistroVacunacion
     */
    public function setCumple($cumple)
    {
        $this->cumple = $cumple;
    
        return $this;
    }

    /**
     * Get cumple
     *
     * @return boolean
     */
    public function getCumple()
    {
        return $this->cumple;
    }

    /**
     * Set propietario
     *
     * @param \stdClass $propietario
     *
     * @return RegistroVacunacion
     */
    public function setPropietario($propietario)
    {
        $this->propietario = $propietario;
    
        return $this;
    }

    /**
     * Get propietario
     *
     * @return \stdClass
     */
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Set observacionesPublicas
     *
     * @param \stdClass $observacionesPublicas
     *
     * @return RegistroVacunacion
     */
    public function setObservacionesPublicas($observacionesPublicas)
    {
        $this->observacionesPublicas = $observacionesPublicas;
    
        return $this;
    }

    /**
     * Get observacionesPublicas
     *
     * @return \stdClass
     */
    public function getObservacionesPublicas()
    {
        return $this->observacionesPublicas;
    }

    /**
     * Set observacionesPrivadas
     *
     * @param \stdClass $observacionesPrivadas
     *
     * @return RegistroVacunacion
     */
    public function setObservacionesPrivadas($observacionesPrivadas)
    {
        $this->observacionesPrivadas = $observacionesPrivadas;
    
        return $this;
    }

    /**
     * Get observacionesPrivadas
     *
     * @return \stdClass
     */
    public function getObservacionesPrivadas()
    {
        return $this->observacionesPrivadas;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return RegistroVacunacion
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    
        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     *
     * @return RegistroVacunacion
     */
    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;
    
        return $this;
    }

    /**
     * Get fechaActualizacion
     *
     * @return \DateTime
     */
    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    /**
     * Set creador
     *
     * @param \stdClass $creador
     *
     * @return RegistroVacunacion
     */
    public function setCreador($creador)
    {
        $this->creador = $creador;
    
        return $this;
    }

    /**
     * Get creador
     *
     * @return \stdClass
     */
    public function getCreador()
    {
        return $this->creador;
    }

    /**
     * Set actualizadoPor
     *
     * @param \stdClass $actualizadoPor
     *
     * @return RegistroVacunacion
     */
    public function setActualizadoPor($actualizadoPor)
    {
        $this->actualizadoPor = $actualizadoPor;
    
        return $this;
    }

    /**
     * Get actualizadoPor
     *
     * @return \stdClass
     */
    public function getActualizadoPor()
    {
        return $this->actualizadoPor;
    }
}

