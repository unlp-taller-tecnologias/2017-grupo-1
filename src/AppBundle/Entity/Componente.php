<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Vacuna;
use AppBundle\Entity\RegistroVacunacion;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Componente
 *
 * @ORM\Table(name="componente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ComponenteRepository")
 */
class Componente {

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
     * @ORM\Column(name="cumple", type="boolean", nullable=true)
     */
    private $cumple;

    /**
     * @var int
     *
     * @ORM\Column(name="dosisRecibidas", type="integer", nullable=true)
     */
    private $dosisRecibidas;

    /**
     * @var Vacuna
     *
     * @ORM\ManyToOne(targetEntity="Vacuna")
     * @ORM\JoinColumn(name="vacuna_id", referencedColumnName="id")
     */
    private $vacuna;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vencimiento", type="date", nullable=true)
     */
    private $vencimiento;

    /**
     * @var RegistroVacunacion
     * 
     * @ORM\ManyToOne(targetEntity="RegistroVacunacion", inversedBy="componentes")
     * @ORM\JoinColumn(name="registroVacunacion_id", referencedColumnName="id")
     */
    private $registroVacunacion;

    /**
     * @var string $comentario
     *
     * @ORM\Column(name="comentario", type="string")
     * @Assert\Length(
     *  min=6,
     *  max=255,
     *  minMessage="El comentario deberá tener al menos 6 caracteres",
     *  maxMessage="El comentario no puede tener más de 255 caracteres"
     * )
     */
    private $comentario;

    function getRegistroVacunacion(): RegistroVacunacion {
        return $this->registroVacunacion;
    }

    function setRegistroVacunacion(RegistroVacunacion $registroVacunacion) {
        $this->registroVacunacion = $registroVacunacion;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set cumple
     *
     * @param boolean $cumple
     *
     * @return Componente
     */
    public function setCumple($cumple) {
        $this->cumple = $cumple;

        return $this;
    }

    /**
     * Get cumple
     *
     * @return boolean
     */
    public function getCumple() {
        return $this->cumple;
    }

    /**
     * Set dosisRecibidas
     *
     * @param integer $dosisRecibidas
     *
     * @return Componente
     */
    public function setDosisRecibidas($dosisRecibidas) {
        $this->dosisRecibidas = $dosisRecibidas;

        return $this;
    }

    /**
     * Get dosisRecibidas
     *
     * @return integer
     */
    public function getDosisRecibidas() {
        return $this->dosisRecibidas;
    }

    function getVacuna(): Vacuna {
        return $this->vacuna;
    }

    function setVacuna(Vacuna $vacuna) {
        $this->vacuna = $vacuna;
    }

    /**
     * Set vencimiento
     *
     * @param \Date $vencimiento
     *
     * @return Componente
     */
    public function setVencimiento($vencimiento) {
        $this->vencimiento = $vencimiento;

        return $this;
    }

    /**
     * Get vencimiento
     *
     * @return \Date
     */
    public function getVencimiento() {
        return $this->vencimiento;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }

    function getComentario(){
        return $this->comentario;
    }

}
