<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RolRepository")
 */
class Rol {

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
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $nombre;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    function getNombre() {
        return $this->nombre;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Rol
     */
    function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Rol
     */
    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function __toString() {
        return $this->nombre;
    }

}
