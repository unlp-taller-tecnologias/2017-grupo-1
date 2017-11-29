<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Enfermedad
 *
 * @ORM\Table(name="enfermedad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnfermedadRepository")
 */
class Enfermedad {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     * 
     * @ORM\Column(name="nombre", type="string")
     * 
     * @Assert\NotBlank(message="El campo nombre no puede estar en blanco")
     * 
     * @Assert\Type("string", message="El valor ingresado {{ value }} no es válido ({{ type }}).")
     */
    private $nombre;

    /**
     * @var string $descripcion
     * 
     * @ORM\Column(name="descripcion", type="string")
     *  
     * @Assert\Type("string", message="El valor ingresado {{ value }} no es válido ({{ type }}).")
     */
    private $descripcion;

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}
