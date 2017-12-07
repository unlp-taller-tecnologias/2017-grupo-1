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
     * @ORM\Column(name="dosis", type="string", length=1)
     */
    private $dosis;

    /**
     * @var string
     *
     * @ORM\Column(name="vencimiento", type="string", length=1)
     */
    private $vencimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
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
     * Set dosis
     *
     * @param string $dosis
     *
     * @return Vacuna
     */
    public function setDosis($dosis)
    {
        $this->dosis = $dosis;
    
        return $this;
    }

    /**
     * Get dosis
     *
     * @return string
     */
    public function getDosis()
    {
        return $this->dosis;
    }

    /**
     * Set vencimiento
     *
     * @param string $vencimiento
     *
     * @return Vacuna
     */
    public function setVencimiento($vencimiento)
    {
        $this->vencimiento = $vencimiento;
    
        return $this;
    }

    /**
     * Get vencimiento
     *
     * @return string
     */
    public function getVencimiento()
    {
        return $this->vencimiento;
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

