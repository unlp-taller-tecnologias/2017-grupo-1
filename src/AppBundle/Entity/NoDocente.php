<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NoDocente
 *
 * @ORM\Table(name="nodocente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NoDocenteRepository")
 */
class NoDocente
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
     * @ORM\Column(name="departamento", type="string", length=255)
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="oficina", type="string", length=255)
     */
    private $oficina;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="funcion", type="string", length=255)
     */
    private $funcion;


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
     * Set departamento
     *
     * @param string $departamento
     *
     * @return NoDocente
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set oficina
     *
     * @param string $oficina
     *
     * @return NoDocente
     */
    public function setOficina($oficina)
    {
        $this->oficina = $oficina;

        return $this;
    }

    /**
     * Get oficina
     *
     * @return string
     */
    public function getOficina()
    {
        return $this->oficina;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return NoDocente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set funcion
     *
     * @param string $funcion
     *
     * @return NoDocente
     */
    public function setFuncion($funcion)
    {
        $this->funcion = $funcion;

        return $this;
    }

    /**
     * Get funcion
     *
     * @return string
     */
    public function getFuncion()
    {
        return $this->funcion;
    }
}

