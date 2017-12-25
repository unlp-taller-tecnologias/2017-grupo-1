<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Vacuna
 *
 * @ORM\Table(name="vacuna")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VacunaRepository")
 * @UniqueEntity(
 *  fields={"abreviatura"},
 *  message="La abreviatura de la vacuna ya se encuentra cargada en el sistema"
 *  )
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
     * @Assert\NotBlank(message="El campo nombre de vacuna no puede estar en blanco")
     * @Assert\Length(
     *      min = 6,
     *      max = 30,
     *      minMessage = "El nombre de vacuna deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "El nombre de vacuna no puede tener más de {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]+$/",
     *     match=true,
     *     message="El nombre no puede contener numeros ni caracteres especiales"
     * )
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", length=100, unique=true)
     * @Assert\NotBlank(message="El campo obreviatura de vacuna no puede estar en blanco")
     * @Assert\Length(
     *      min = 2,
     *      max = 100,
     *      minMessage = "La abreviatura de vacuna deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "La abreviatura de vacuna no puede tener más de {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]+$/",
     *     match=true,
     *     message="La abreviatura no puede contener numeros ni caracteres especiales"
     * )
     */
    private $abreviatura;

    /**
     * @var string
     *
     * @ORM\Column(name="dosisRequeridas", type="integer", length=1)
     * @Assert\NotBlank(message="El campo dosis requeridas de vacuna no puede estar en blanco")
     * @Assert\Range(
     *  min=1,
     *  minMessage= "La vacuna debe tener como minimo {{ limit }} dosis"
     *)
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
     *
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
