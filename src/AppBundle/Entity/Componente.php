<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Componente
 *
 * @ORM\Table(name="componente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ComponenteRepository")
 */
class Componente
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
     * @var int
     *
     * @ORM\Column(name="dosisRecibidas", type="integer")
     */
    private $dosisRecibidas;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="vacuna", type="object")
     */
    private $vacuna;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vencimiento", type="datetime", nullable=true)
     */
    private $vencimiento;


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
     * @return Componente
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
     * Set dosisRecibidas
     *
     * @param integer $dosisRecibidas
     *
     * @return Componente
     */
    public function setDosisRecibidas($dosisRecibidas)
    {
        $this->dosisRecibidas = $dosisRecibidas;
    
        return $this;
    }

    /**
     * Get dosisRecibidas
     *
     * @return integer
     */
    public function getDosisRecibidas()
    {
        return $this->dosisRecibidas;
    }

    /**
     * Set vacuna
     *
     * @param \stdClass $vacuna
     *
     * @return Componente
     */
    public function setVacuna($vacuna)
    {
        $this->vacuna = $vacuna;
    
        return $this;
    }

    /**
     * Get vacuna
     *
     * @return \stdClass
     */
    public function getVacuna()
    {
        return $this->vacuna;
    }

    /**
     * Set vencimiento
     *
     * @param \DateTime $vencimiento
     *
     * @return Componente
     */
    public function setVencimiento($vencimiento)
    {
        $this->vencimiento = $vencimiento;
    
        return $this;
    }

    /**
     * Get vencimiento
     *
     * @return \DateTime
     */
    public function getVencimiento()
    {
        return $this->vencimiento;
    }
}

