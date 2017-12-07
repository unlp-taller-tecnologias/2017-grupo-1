<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visitante
 *
 * @ORM\Table(name="visitante")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VisitanteRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="tipoVisitante", type="string")
 * @ORM\DiscriminatorMap({"visitante" = "Visitante" , "inscripto" = "Inscripto", "noDocente" = "NoDocente"})
 */
class Visitante {

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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=255)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=255)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="partido", type="string", length=255)
     */
    private $partido;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoPostal", type="string", length=255)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoDocumento", type="string", length=255)
     */
    private $tipoDocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="nroDocumento", type="string", length=255, unique=true)
     */
    private $nroDocumento;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Visitante
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Visitante
     */
    public function setApellido($apellido) {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido() {
        return $this->apellido;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Visitante
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Visitante
     */
    public function setPais($pais) {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais() {
        return $this->pais;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Visitante
     */
    public function setProvincia($provincia) {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia() {
        return $this->provincia;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return localidad
     */
    public function setLocalidad($localidad) {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad() {
        return $this->localidad;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return localidad
     */
    public function setCodigoPostal($codigoPostal) {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal() {
        return $this->codigoPostal;
    }

    /**
     * Set tipoDocumento
     *
     * @param string $tipoDocumento
     *
     * @return Visitante
     */
    public function setTipoDocumento($tipoDocumento) {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return string
     */
    public function getTipoDocumento() {
        return $this->tipoDocumento;
    }

    /**
     * Get partido
     * 
     * @return string
     */
    function getPartido() {
        return $this->partido;
    }

    /**
     * Get nroDocumento
     * 
     * @return integer
     */
    function getNroDocumento() {
        return $this->nroDocumento;
    }

    /**
     * Set partido
     *
     * @param string $partido
     *
     * @return Visitante
     */
    function setPartido($partido) {
        $this->partido = $partido;

        return $this;
    }

    /**
     * Set nroDocumento
     * 
     * @param integer $nroDocumento
     * 
     * @return Visitante
     */
    function setNroDocumento($nroDocumento) {
        $this->nroDocumento = $nroDocumento;

        return $this;
    }

}
