<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscripto
 *
 * @ORM\Table(name="inscripto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InscriptoRepository")
 */
class Inscripto
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
     * @ORM\Column(name="nroFicha", type="string", length=255)
     */
    private $nroFicha;

    /**
     * @var string
     *
     * @ORM\Column(name="legajo", type="string", length=255)
     */
    private $legajo;

    /**
     * @var date
     *
     * @ORM\Column(name="fechaInscripcion", type="date")
     */
    private $fechaInscripcion;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nroFicha
     *
     * @param string $nroFicha
     *
     * @return Inscripto
     */
    public function setNroFicha($nroFicha)
    {
        $this->nroFicha = $nroFicha;

        return $this;
    }

    /**
     * Get nroFicha
     *
     * @return string
     */
    public function getNroFicha()
    {
        return $this->nroFicha;
    }

    /**
     * Set legajo
     *
     * @param string $legajo
     *
     * @return Inscripto
     */
    public function setLegajo($legajo)
    {
        $this->legajo = $legajo;

        return $this;
    }

    /**
     * Get legajo
     *
     * @return string
     */
    public function getLegajo()
    {
        return $this->legajo;
    }

    /**
     * Set fechaInscripcion
     *
     * @param string $fechaInscripcion
     *
     * @return fechaInscripcion
     */
    public function setFechaInscripcion($fechaInscripcion)
    {
        $this->fechaInscripcion = $fechaInscripcion;

        return $this;
    }

    /**
     * Get fechaInscripcion
     *
     * @return string
     */
    public function getFechaInscripcion()
    {
        return $this->fechaInscripcion;
    }
}

