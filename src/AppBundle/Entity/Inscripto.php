<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Inscripto
 *
 * @ORM\Table(name="inscripto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InscriptoRepository")
 * @UniqueEntity(fields={"nroFicha"}, message="Ya existe un inscripto con este nro de ficha.")
 * @UniqueEntity(fields={"legajo"}, message="Ya existe un inscripto con este nro de legajo.")
 * message="This nroFicha is already in use on that host."
 */
class Inscripto extends Visitante {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nroFicha", type="string", length=255, unique=true, nullable=true)
     */
    protected $nroFicha;

    /**
     * @var string
     *
     * @ORM\Column(name="legajo", type="string", length=255, unique=true, nullable=true)
     * @Assert\Length(
     *      min = 6,
     *      max = 30,
     *      minMessage = "El legajo deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "El legajo no puede tener más de {{ limit }} caracteres"
     * )
     */
    protected $legajo;

    /**
     * @var date
     *
     * @ORM\Column(name="fechaInscripcion", type="date")
     * @Assert\Date()
     */
    protected $fechaInscripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="anoIngreso", type="integer", length=4)
     */
    protected $anoIngreso;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nroFicha
     *
     * @param string $nroFicha
     *
     * @return Inscripto
     */
    public function setNroFicha($nroFicha) {
        $this->nroFicha = $nroFicha;

        return $this;
    }

    /**
     * Get nroFicha
     *
     * @return string
     */
    public function getNroFicha() {
        return $this->nroFicha;
    }

    /**
     * Set legajo
     *
     * @param string $legajo
     *
     * @return Inscripto
     */
    public function setLegajo($legajo) {
        $this->legajo = $legajo;

        return $this;
    }

    /**
     * Get legajo
     *
     * @return string
     */
    public function getLegajo() {
        return $this->legajo;
    }

    /**
     * Set fechaInscripcion
     *
     * @param string $fechaInscripcion
     *
     * @return fechaInscripcion
     */
    public function setFechaInscripcion($fechaInscripcion) {
        $this->fechaInscripcion = $fechaInscripcion;

        return $this;
    }

    /**
     * Get fechaInscripcion
     *
     * @return string
     */
    public function getFechaInscripcion() {
        return $this->fechaInscripcion;
    }

    public function getTipo() {
        return 'Inscripto';
    }

    public function setAnoIngreso($anoIngreso) {
        $this->anoIngreso = $anoIngreso;

        return $this;
    }

    public function getAnoIngreso() {
        return $this->anoIngreso;
    }

    public function __toString() {
        return $this->getNombre();
    }

}
