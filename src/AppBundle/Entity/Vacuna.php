<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vacuna
 *
 * @ORM\Table(name="vacuna")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VacunaRepository")
 */
class Vacuna
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, unique=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", length=20, unique=true)
     */
    private $abreviatura;

    /**
     * @var string
     *
     * @ORM\Column(name="dosisRequeridas", type="integer", length=1)
     */
    private $dosisRequeridas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tieneVencimiento", type="boolean", length=1)
     */
    private $tieneVencimiento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esObligatoria", type="boolean", length=1)
     */
    private $esObligatoria;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255, nullable=true)
     */
    private $observacion;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Vacuna
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     *
     * @return Vacuna
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;
    
        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }

    /**
     * Set dosisRequeridas
     *
     * @param string $dosisRequeridas
     *
     * @return Vacuna
     */
    public function setDosisRequeridas($dosisRequeridas)
    {
        $this->dosisRequeridas = $dosisRequeridas;
    
        return $this;
    }

    /**
     * Get dosisRequeridas
     *
     * @return string
     */
    public function getDosisRequeridas()
    {
        return $this->dosisRequeridas;
    }

    /**
     * Set tieneVencimiento
     *
     * @param boolean $tieneVencimiento
     *
     * @return Vacuna
     */
    public function setTieneVencimiento($tieneVencimiento)
    {
        $this->tieneVencimiento = $tieneVencimiento;
    
        return $this;
    }

    /**
     * Get tieneVencimiento
     *
     * @return boolean
     */
    public function getTieneVencimiento()
    {
        return $this->tieneVencimiento;
    }

    /**
     * Set esObligatoria
     *
     * @param string $esObligatoria
     *
     * @return Vacuna
     */
    public function setEsObligatoria($esObligatoria)
    {
        $this->esObligatoria = $esObligatoria;
    
        return $this;
    }

    /**
     * Get esObligatoria
     *
     * @return string
     */
    public function getEsObligatoria()
    {
        return $this->esObligatoria;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Vacuna
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }
}

