<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Enfermedad
 *
 * @ORM\Table(name="enfermedad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnfermedadRepository")
 * @UniqueEntity(
 *  fields={"nombre"},
 *  message="El nombre de la enfermedad ya se encuentra registrado en el sistema"
 *)
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
     * @Assert\NotBlank(message="El nombre de la enfermedad no puede estar en blanco")
     * @Assert\Length(
     *  min=6,
     *  max=255,
     * minMessage="El nombre de la enfermedad deberá tener al menos {{limit}} caracteres",
     * maxMessage="El nombre de la enfermedad no puede tener más de {{limit}} caracteres"
     * )
     */
    private $nombre;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string")
     * @Assert\NotBlank(message="La descripcion de la enfermedad no puede estar en blanco")
     * @Assert\Length(
     *  min=6,
     *  max=255,
     * minMessage="La descripcion de la enfermedad deberá tener al menos {{limit}} caracteres",
     * maxMessage="La descripcion de la enfermedad no puede tener más de {{limit}} caracteres"
     * )
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
