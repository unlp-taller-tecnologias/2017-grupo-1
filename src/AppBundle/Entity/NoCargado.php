<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NoCargado
 *
 * @ORM\Table(name="no_cargado")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NoCargadoRepository")
 */
class NoCargado
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="ficha", type="string", length=255)
     */
    private $ficha;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=255)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=255)
     */
    private $motivo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreExcel", type="string", length=255)
     */
    private $nombreExcel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return NoCargado
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido.
     *
     * @param string $apellido
     *
     * @return NoCargado
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido.
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set ficha.
     *
     * @param string $ficha
     *
     * @return NoCargado
     */
    public function setFicha($ficha)
    {
        $this->ficha = $ficha;
    
        return $this;
    }

    /**
     * Get ficha.
     *
     * @return string
     */
    public function getFicha()
    {
        return $this->ficha;
    }

    /**
     * Set dni.
     *
     * @param string $dni
     *
     * @return NoCargado
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    
        return $this;
    }

    /**
     * Get dni.
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set motivo.
     *
     * @param string $motivo
     *
     * @return NoCargado
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;
    
        return $this;
    }

    /**
     * Get motivo.
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set nombreExcel.
     *
     * @param string $nombreExcel
     *
     * @return NoCargado
     */
    public function setNombreExcel($nombreExcel)
    {
        $this->nombreExcel = $nombreExcel;
    
        return $this;
    }

    /**
     * Get nombreExcel.
     *
     * @return string
     */
    public function getNombreExcel()
    {
        return $this->nombreExcel;
    }

    /**
     * Set fecha.
     *
     * @param \DateTime $fecha
     *
     * @return NoCargado
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha.
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
