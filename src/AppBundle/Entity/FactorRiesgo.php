<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FactorRiesgo
 *
 * @ORM\Table(name="factor_riesgo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FactorRiesgoRepository")
 * @UniqueEntity(
 *  fields={"nombre"},
 *  message="El nombre del factor de riesgo ya se encuentra registrado en el sistema"
 *)
 */
class FactorRiesgo
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
     * @Assert\NotBlank(message="El nombre del factor de riesgo no puede estar en blanco")
     * @Assert\Length(
     *  min=3,
     *  max=255,
     * minMessage="El nombre del factor de riesgo deberá tener al menos {{limit}} caracteres",
     * maxMessage="El nombre del factor de riesgo no puede tener más de {{limit}} caracteres"
     * )
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     * @Assert\NotBlank(message="La descripción del factor de riesgo no puede estar en blanco")
     * @Assert\Length(
     *  min=6,
     *  max=255,
     * minMessage="La descripción del factor de riesgo deberá tener al menos {{limit}} caracteres",
     * maxMessage="La descripción del factor de riesgo no puede tener más de {{limit}} caracteres"
     * )
     */
    private $descripcion;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return FactorRiesgo
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return FactorRiesgo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
